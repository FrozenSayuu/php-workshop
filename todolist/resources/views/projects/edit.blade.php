@extends('layouts/app')
@section('content')

	<h1>Edit your Project</h1>

	@include('partials/validation_errors')

	<div class="card">
		<div class="card-body">
			<form method="post" action="{{ route('projects.update', ['project' => $project]) }}">
				@csrf
				@method('PUT')

				<div class="mb-3">
					<label for="title" class="form-label">Title</label>
					<input type="text" class="form-control" id="title" name="title" required value="{{old('title') ?: $project->title}}">
					<label for="description" class="form-label">Description</label>
					<input type="text" class="form-control" id="description" name="description" required value="{{old('description') ?: $project->description}}">
				</div>

				<button type="submit" class="btn btn-success">Edit</button>
			</form>
		</div>
	</div>

	<div class="mt-4">
		<a href="{{ route('projects.index') }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection