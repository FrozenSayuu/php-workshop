@extends('layouts/app')
@section('content')

      <h2>Todos</h2>

      @if(count($todos) > 0)
        <ol>
            @foreach ($todos as $todo)
                <li>
                    <a href="/todos/{{$todo->id}}">
                      {{$todo->title}}
                    </a>
                  @if($todo->completed)
                    R
                  @endif
                </li>
            @endforeach
        </ol>
        @else
          <p>No todos!</p>
      @endif
@endsection