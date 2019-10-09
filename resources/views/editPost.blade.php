@extends('layout.layout')

@section('content')
  <div class="edit_post">
    <p>Author: {{ $post -> author}}</p>
    <form class="" action="{{ route('post.update', $post -> id)}}" method="post">
      @csrf
      @method('POST')
      
      <label for="title">Edit Title</label>
      <input type="text" name="title" value="{{ $post -> title}}">
      <label for="description">Edit Content</label>
      <input type="text" name="description" value="{{ $post -> description}}">
      <button type="submit" name="button">Edit</button>
    </form>
  </div>
@endsection
