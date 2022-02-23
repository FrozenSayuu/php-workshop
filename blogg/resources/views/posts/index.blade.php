@extends('layouts.app')
@section('content')

@foreach ($posts as $post)
@if($post->user == auth()->user())
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary btn-sm">
        View
      </a>
    <p>{{$post->user}}</p>
@endif
@endforeach

@endsection