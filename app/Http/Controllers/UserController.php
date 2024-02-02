<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
