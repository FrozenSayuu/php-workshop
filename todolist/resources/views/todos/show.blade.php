@extends('layouts/app')
@section('content')

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

      <div>
        <a href="{{route('todos.index')}}" class="btn btn-secondary">&laquo; Back</a>
      </div>
@endsection