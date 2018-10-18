<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todo=Todo::all();
        return view('todos')->with('todo',$todo);
    }
    public function create(Request $request){
        $todo=new Todo;
        $todo->todo=$request->todo;
        $todo->save();
        return redirect()->back();
    }
    public function delete($id){
        $todo=Todo::find($id);
        $todo->delete();
        return redirect()->back();
    }
    public function complete($id){
        $todo=Todo::find($id);
        $todo->completed='1';
        $todo->save();
        return redirect()->back();
    }
    public function update($id){
        $todo=Todo::find($id);
        return view('update')->with('todo',$todo);
    }
    public function saveupdate(Request $request,$id){
        $todo=Todo::find($id);
        $todo->todo=$request->todo;
        $todo->save();
        return redirect()->route('todos');
    }
}
