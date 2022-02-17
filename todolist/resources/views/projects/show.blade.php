@extends('layouts/app')
@section('content')

<div class="d-flex justify-content-between align-items-center my-3">
  <h1>{{ $project->title }}</h1>

  <a href="{{ route('projects.edit', ['project' => $project]) }}" class="btn btn-warning">Edit project</a>

  <form class="d-inline-block" method="POST" action="{{ route('projects.destroy', ['project' => $project]) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger confirm">Delete project</button>
  </form>
</div>

<p>{{$project->description}}</p>

@include('partials/status')

<!-- show this project's todos -->
@if(count($project->todos) > 0)
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Completed</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($project->todos as $todo)
        <tr>
          <td>{{ $todo->id }}</td>
          <td>{{ $todo->title }}</td>
          <td>
            @if($todo->completed)
              R
            @else
              X
            @endif
          </td>
          <td>
            <a href="/projects/{{ $project->id }}/todos/{{ $todo->id }}" class="btn btn-primary btn-sm">
              View
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
  <p>No todos left!</p>
@endif
<!-- end show this project's todos -->

<div class="mt-4">
  <a href="{{ route('projects.index') }}" class="btn btn-secondary">&laquo; Back</a>
</div>
@endsection