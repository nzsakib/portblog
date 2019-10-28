@extends('layouts.blog')

@section('content')
    <div class="container">
        <br>
        <form action="{{ route('blog.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Post Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-group"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Create New Post</button>
            </div>
        </form>
    </div>
@endsection