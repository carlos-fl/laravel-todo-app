<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function getHome() {
        $todos = Todo::all();
        return view('home', compact('todos'));
    }

    public function addTodo() {
        return view('addTodo');
    }

    public function addTodoToDB(Request $request) {
       $todo = new Todo();
       $todo->taskDescription = $request->desc; 
       $todo->done = false;
       $todo->save();

       return redirect('home')->with('success');
    }

    public function markDone($todoId) {
        $todo = Todo::find($todoId);
        $todo->done = true;
        $todo->save();

        return redirect(route('home'))->with('success');
    }

    public function editTodo($todoId) {
        $todo = Todo::find($todoId);
        return view('editForm', compact('todo'));
    }

    public function updateTodo(Request $request, $todoId) {
        $todo = Todo::find($todoId);
        $todo->taskDescription = $request->desc;
        $todo->done = false;
        $todo->save();

        return redirect('home')->with('success');
    }

    public function deleteTodo($todoId) {
        $todo = Todo::find($todoId);
        $todo->delete();

        return redirect('home')->with('success');
    }
}
