@extends('layouts/app')
@section('content')

	<h1>Edit your post</h1>

	<div class="card">
		<div class="card-body">
			<form method="post" action="{{ route('posts.update', ['post' => $post]) }}">
				@csrf
				@method('PUT')

				<div class="mb-3">
					<label for="title" class="form-label">Title</label>
					<input type="text" class="form-control" id="title" name="title" required value="{{old('title') ?: $post->title}}">
					<label for="description" class="form-label">Description</label>
					<input type="text" class="form-control" id="description" name="description" required value="{{old('description') ?: $post->content}}">
				</div>

				<button type="submit" class="btn btn-success">Edit</button>
			</form>
		</div>
	</div>

	<div class="mt-4">
		<a href="{{ route('posts.index') }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection