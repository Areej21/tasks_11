<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginContrller;
use App\Http\Controllers\TaskController;


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
// Route::get('/login',[loginContrller::class,'index'])->name('login.index');
// Route::post('/login',[loginContrller::class,'loginsubmit'])->name('login.submit');
// Route::get('/contact',[TaskController::class,'index']);
// Route::get('/contact/{id}',[TaskController::class,'show']);
Route::get('/task',[TaskController::class,'index']);
Route::get('/task',[TaskController::class,'destroy']);

Route::get('tasks',function(){
    $tasks =[
    'first-task' => 'task 1',
    'second-task'=> 'task 2',
    'third-task'=>'task 3'
    ];
    return view ('tasks',compact('tasks'));
});
Route::get('show/{id}',function($id){
    $tasks =[
        'first-task' => 'task 1',
        'second-task'=> 'task 2',
        'third-task'=>'task 3'
        ];
    $task =$tasks[$id];
    return view ('show',compact('task'));
});
Route::get('app',function (){
    return view('layouts.app');

});
Route::get('task',function (){
    return view('task');

});
Route::delete('task/destroy/{id}',[TaskController::class,'destroy']);