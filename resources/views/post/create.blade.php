@extends('layouts.main')
@section('content')
    <div>
        <form action = "{{ route('post.store') }}" method="post">
          @csrf
            <div class="m-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="m-3">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
            </div>
            <div class="m-3">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image">
            </div>
            <button type="submit" class="btn btn-primary m-3">Create</button>
        </form>
    </div>
@endsection
