@extends('layout.layout')

@section('content')
  <div class="show_post">
    <h3>{{$post -> title}}</h3>
    <p>{{$post -> description}}</p>
    <p>Author: {{$post -> author}}</p>
    @foreach ($post -> tags as $tag)
      <p>#{{$tag -> name}}</p>
    @endforeach
  </div>
@endsection
