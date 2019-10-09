@extends('layout.layout')

@section('content')
  @foreach ($posts as $post)
    <div class="post">
      <h3>{{$post -> title}}</h3>
      <p>{{$post -> description}}</p>
      <p>Author: {{$post -> author}}</p>
      <a href="{{ route('post.show', $post -> id )}}">Show</a>
      <a href="{{ route('post.edit', $post -> id ) }}">Edit</a>
    </div>

  @endforeach
@endsection
