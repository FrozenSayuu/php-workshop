@extends('layouts/app')
@section('content')
            
          </li>

        </ul>
      </div>
    </div>
  </nav>

    <div>
        <h2>Welcome to your Todolist</h2>
        <p>Here be your todos!</p>
        <a href="{{route('todos.index')}}" class="btn btn-primary">To your todos! &raquo;</a>
@endsection