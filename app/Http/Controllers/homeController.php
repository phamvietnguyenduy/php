<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
   public function index(){
   	return view("welcome");
   }
   public function Home(){
   	return view("home");//home.blade.php
   }
   public function check(){
   	return view("checkout");//home.blade.php
   }
   public function contact(){
   	return view("contact");//home.blade.php
   }
   public function cart(){
   	return view("cart");//home.blade.php
   }
   public function blog(){
   	return view("blog");//home.blade.php
   }
}
