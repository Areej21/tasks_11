<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TaskController extends Controller
{ 
     
    public function index(){
        $tasks = DB ::table('tasks')->get();
        // return view ('contact',compact('tasks'));
        return view ('task');

    }
    //
    public function destroy($id){
        DB::table('task')->where('id',$id)->delete();
        return redirect()->back();

    }
}
