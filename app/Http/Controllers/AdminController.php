<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use App\Models\Cat;
use Illuminate\Http\Request;

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
}
