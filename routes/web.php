<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginContrller;


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


Route::post('/about',function(){
$name = $_POST['name'];
return view('about',compact('name'));
});
Route::get('/login',[loginContrller::class,'index'])->name('login.index');
Route::post('/login',[loginContrller::class,'loginsubmit'])->name('login.submit');