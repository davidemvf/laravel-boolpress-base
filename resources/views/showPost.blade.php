@extends('layout.layout')

@section('content')
  <div class="show_post">
    <h3>{{$post -> title}}</h3>
    <p>{{$post -> description}}</p>
    <p>Author: {{$post -> author}}</p>
    @foreach ($post -> tags as $tag)
      <p>#{{$tag -> name}}</p>
      <a href="{{ route('tag.show', $tag -> id) }}">Show by tag</a>
    @endforeach
  </div>
@endsection
