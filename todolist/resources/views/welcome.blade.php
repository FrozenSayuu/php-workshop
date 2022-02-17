@extends('layouts/app')
@section('content')
            
          </li>

        </ul>
      </div>
    </div>
  </nav>

    <div>
        <div>
          <h4>Your Projects</h4>
          <p>The ultimate place for all your todos! Add adding your todos to this todo site as a todo.</p>
          <a href="{{ route('projects.index') }}" class="btn btn-primary">View projects &raquo;</a>
        </div>
@endsection