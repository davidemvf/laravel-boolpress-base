@extends('layout.layout')

@section('content')
  <a href="{{ route('post.create') }}">Create New Post</a>
  <div class="categories_buttons">
    @foreach ($categories as $category)
      <a href="{{ route('category.show', $category -> id) }}">{{$category -> name}}</a>
    @endforeach
  </div>
  @foreach ($posts as $post)
    <div class="post">
      <h3>{{$post -> title}}</h3>
      <p>{!! $post -> description !!}</p>
      <p>Author: {{$post -> author}}</p>
      <a href="{{ route('post.show', $post -> id ) }}">Show</a>
      <a href="{{ route('post.edit', $post -> id ) }}">Edit</a>
    </div>
  @endforeach
@endsection
