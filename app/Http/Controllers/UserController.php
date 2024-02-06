<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cat;
use App\Models\Time;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
   function index(){
      $cats = Cat::all();
      $categories = Category::all();
      return view("index", compact("cats"), compact("categories"));
   }
   function filt_categ($id){
      $cats = Cat::where("category_id", $id)->get();
      $categories = Category::all();
      return view("index", compact("cats"), compact("categories"));
   }
   function lk(){
      $user_id = Auth::user()->id;
      $user = User::find($user_id);
      $apps = Application::where('user_id', $user_id)->join("times", "applications.time_id", "=", "times.id")->join("users", "applications.user_id", "=", "users.id")->join("cats", "applications.cat_id", "=", "cats.id")->join("statuses", "applications.status_id", "=", "statuses.id")->get();
      if($user){
         return view("lk", compact("user"), compact("apps"));
      }
    
   }
   function app(){

      $cats = Cat::all();
      $times = Time::all();
    return view("app", compact("cats"), compact("times"));
   }
   function app_let(Request $request){
      $request->validate([
         "cat" => "required",
         "time"=> "required",
      ]);
      $app = Application::create([
         "user_id" => Auth::user()->id,
         "cat_id" => $request->cat,
         "time_id" => $request->time,
         "status_id" => 1,
      ]);
      if($app){
         return redirect('/lk');
      }
   }
   function signin(){
      return view("signin");
   }
   
   function signup(){
      return view("signup");
   }
   function signup_valid(Request $request){
      $request->validate([
         "email" => "required|email",
         "password" => "required",
         "name" => "required|regex:/^[а-яА-Я]+$/",
      ],[
         "email.required" => "Обязательно поле",
         "password.required" => "Обязательное поле",
         "name.required" => "Обязательное поле",
         "name.regex" => "Только кириллица",
      ]);
      if($request->password == $request->password_check){
         $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
         ]);
         if($user){
         return redirect('/signin');
         }
      } else {
         return redirect()->back()->with("error","Пароли не совпадают");
      }
   }
   function signin_valid(Request $request){
      $user = Auth::attempt([
         "email" => $request->email,
         "password"=> $request->password,
      ]);
      if($user){
         return redirect("/");
      } else {
         return redirect()->back()->with("error","Данные отсутствуют");
      }
   }
   function signout(){
      Auth::logout();
      Session::flush();
      return redirect("/");
   }
}
