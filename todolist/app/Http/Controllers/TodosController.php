<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos/index', ['todos' => $todos]);
    }

    public function show(Todo $todo)
    {
        return view('todos/show', ['todo' => $todo]);
    }
}
