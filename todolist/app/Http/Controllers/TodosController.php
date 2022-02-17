<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Project;

class TodosController extends Controller
{
    public function index()
    {
        return "Not Implemented";
    }

    public function show(Project $project, Todo $todo)
    {
        return view('todos/show', ['project' => $project,'todo' => $todo]);
    }

	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		//
	}

	public function edit(Todo $todo)
	{
		//
	}

	public function update(Request $request, Todo $todo)
	{
		//
	}

	public function destroy(Todo $todo)
	{
		//
	}
}
