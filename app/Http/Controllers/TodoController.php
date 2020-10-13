<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index (){
       $todoList=Todo::all();
        return view("todos.todos")->with([
            'todos'=>$todoList
            ]
        );
    }
    public function edit(){
        return view('todos.edit-todo');
    }
    public  function store(Request $request){
       Todo::create([
           'user_id'=>1,
           "content"=>$request->todo,
       ]);
       return redirect('todos');
    }
    public function show(Todo $todo){
      return view('todos.todo')->withTodo($todo);
    }
    public  function update(Request $request){

    }
    public  function delete($id){

    }
}
