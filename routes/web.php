<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Home','homeController@Home') ;
Route::get('shop-page={page}','ShopController@view') ;
Route::get('checkout','homeController@check') ;
Route::get('contact','homeController@contact') ;
Route::get('cart','homeController@cart') ;
Route::get('blog','homeController@blog') ;
Route::group(['prefix' => 'admin/sp'], function () {
    route::get('add',function(){
        echo 'them';
    });
    route::get('xoa',function(){
        echo 'xoa';
    });
    route::get('sua',function(){
        echo 'sua';
    });
});
Route::get('form', function() {
    return view("test");    
});
Route::get('former','TestController@cong')->name("cong") ;
