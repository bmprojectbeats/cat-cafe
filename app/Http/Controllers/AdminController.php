<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    function index(){
        $apps = Application::with('users')->get();
        $users = User::with('apps')->get();
        return view("admin/index",compact("apps", "users"));
    }
    function accept($id){
        $app = Application::where("id", $id)->update(["status_id" => 3]);

        if($app){
            return redirect("/admin");
        }
    }
    function decline($id){
        $app = Application::where("id", $id)->update(["status_id" => 2]);
        if($app){
            return redirect("/admin");
        }
    }
    function cats(){
        $cats = Cat::all();
        return view("admin/cats",compact("cats"));
    }
    function delete_cat($id){
       
        $cat = Cat::where("id", $id)->delete();
        return redirect("/cats");
    }
    function add_cat(Request $request){
        $request->validate([
            'cat_name'=> 'required',
            'description'=> 'required',
            'image' => 'required',
            'category_id' => 'required',
        ],[
            'cat_name.required' => 'Обязательное поле',
            'description.required' => 'Обязательное поле',
            'image.required' => 'Обязательное поле',
            'category_id.required' => 'Обязательное поле',
        ]);
        $file_name = $request->file('image')->getClientOriginalName();
        $file = $request->file('image')->move(public_path('images/'), $file_name);
        $cat = Cat::create([
            'cat_name' => $request->cat_name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'avatar' => $file_name,
        ]);
        if($cat){
            return redirect('/cats');
        }
    }
    function signin(){
        return view("admin/signin");
    }
    function signin_valid(Request $request){
        $user = Auth::attempt([
           "email" => $request->email,
           "role_id" => 1,
           "password"=> $request->password,
        ]);
        if($user){
           return redirect("/admin");
        } else {
           return redirect()->back()->with("error","Данные отсутствуют");
        }
     }
}
