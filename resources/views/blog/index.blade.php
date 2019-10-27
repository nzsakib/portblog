@extends('layouts.blog')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
            </div>
        @endforeach
    </div>
@endsection