@extends('layouts.main')
@section('content')
    <div>
        <form action = "{{ route('post.update', $post->id) }}" method="post">
          @csrf
          @method('patch')
            <div class="m-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value = "{{ $post->title }}">
            </div>
            <div class="m-3">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Content">{{ $post->content }}</textarea>
            </div>
            <div class="m-3">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image" value = "{{ $post->image }}">
            </div>
            <button type="submit" class="btn btn-primary m-3">Update</button>
        </form>
    </div>
@endsection
