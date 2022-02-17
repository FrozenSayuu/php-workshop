@extends('layouts/app')
@section('content')
<?php use App\Models\Todo; ?>

      <h2>{{$todo->title}}</h2>

      @if($todo->description)
        <h4>Description</h4>
        <p>{{$todo->description}}</p>
      @endif

      <p><strong>Status:</strong>
        @if($todo->completed)
          Complete
        @else
          Incomplete
        @endif
      </p>

      @if($todo->project_id)
        <h4>Belongs to Project</h4>
        <p>{{$project->title}}</p>
      @endif

      <div>
        <a href="{{route('projects.show', ['project' => $project])}}" class="btn btn-secondary">&laquo; Back</a>
      </div>
@endsection