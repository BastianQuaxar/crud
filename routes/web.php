<?php

use App\Http\Controllers\Dashboard\PostControler;
use Illuminate\Support\Facades\Route;

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


Route::resource('post', PostControler::class);

//Route::get('post',[PostControler::class,'index']);
// Route::get('post/{post}',[PostControler::class,'show']);
//Route::get('post/create',[PostControler::class,'create']);
// Route::get('post/{post}/edit',[PostControler::class,'edit']);
// Route::post('post',  [PostControler::class,'store']);
// Route::pust('post/{post}',  [PostControler::class,'update']);
// Route::pust('post/{post}',  [PostControler::class,'delite']);
