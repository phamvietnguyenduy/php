<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function view($page){
       return view('shop',['p'=>$page]);
    }
}
