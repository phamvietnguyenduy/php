<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function cong(request $request){
        // \session()->put("user",$request->a);
        // \session()->push("userarr",$request->b);
        // foreach(session()->get("userarr") as $i){
        //     echo $i."+";
        // }
       if($request->cars=='cong'){return  $request->a+$request->b;}
       if($request->cars=='tru'){echo $request->a-$request->b;}
       if($request->cars=='nhan'){echo $request->a*$request->b;}
       if($request->cars=='chia'){echo $request->a/$request->b;}
    }
}
