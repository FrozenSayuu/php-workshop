<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$projects = Project::all();

		return view('projects/index', [
			'projects' => $projects,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('projects/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// somehow get the data from the form and create a new project using that data
		$validInput = $request->validate([
			'title' => 'required|min:3',
		]);

		$project = Project::create($validInput);

		// also, redirect the user to the new project
		return redirect()
			->route('projects.show', ['project' => $project])
			->with('success', 'Yay project!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function show(Project $project)
	{
		return view('projects/show', [
			'project' => $project,
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Project $project)
	{
		return view('projects/edit', [
			'project' => $project
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * /projects/{project}
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Project $project)
	{
		// validate input
		$validInput = $request->validate([
			'title' => 'required|min:3',
			'description' => 'required|min:3'
		]);

		// update project with validated input
		$project->update($validInput);

		// also, redirect the user to the updated project
		return redirect()
			->route('projects.show', ['project' => $project])
			->with('success', 'Project successfully updated 💪🏻!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Project $project)
	{
		$project->delete();

		return redirect()
			->route('projects.index')
			->with('success', 'Project successfully deleted 😈.');
	}
}