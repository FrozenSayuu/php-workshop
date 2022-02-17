@extends('layouts/app')
@section('content')

<div class="d-flex justify-content-between align-items-center my-3">
  <h1>Projects</h1>
  <a href="{{ route('projects.create') }}" class="btn btn-primary">Create a new project</a>
</div>

@include('partials/status')

@if(count($projects) > 0)
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Todos</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($projects as $project)
        <tr>
          <td>{{ $project->id }}</td>
          <td>{{ $project->title }}</td>
          <td>{{ $project->todos()->count() }}</td>
          <td>
            <a href="/projects/{{ $project->id }}" class="btn btn-primary btn-sm">
              View
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
        @else
          <p>No projects!</p>
      @endif
@endsection