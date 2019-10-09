@extends('layout.layout')

@section('content')
  <div class="edit_post">
    <form class="" action="{{ route('post.store')}}" method="post">
      @csrf
      @method('POST')

      <label for="title">Title</label>
      <input type="text" name="title" value="">

      <label for="description">Content</label>
      <input type="text" name="description" value="">

      <label for="author">Author</label>
      <input type="text" name="author" value="">

      <select name='category_id'>
        @foreach ($categories as $category)
          <option value= "{{ $category -> id }}"> {{$category -> name}} </option>
        @endforeach
      </select>

      <button type="submit" name="button">Create</button>
    </form>
  </div>
@endsection
