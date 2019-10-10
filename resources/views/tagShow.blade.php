@extends('layout.layout')

@section('content')
  <p>#{{$tag -> name}}</p>
  @foreach ($tag -> posts as $post)
    <div class="show_post">
      <h3>{{$post -> title}}</h3>
      <p>{{$post -> description}}</p>
      <p>Author: {{$post -> author}}</p>
      
    </div>

  @endforeach

@endsection
