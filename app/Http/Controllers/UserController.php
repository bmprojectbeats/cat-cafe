<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
   function index(){
    return view("index");
   }
   function lk(){
    return view("lk");
   }
   function app(){
    return view("app");
   }
   function signin(){
      return view("signin");
   }
   
   function signup(){
      return view("signup");
   }
   function signup_valid(Request $request){
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
