@extends('layouts.app')

@section('content')

    <div class="main posts-index">
        <div class="container">
            @foreach($posts as $post)
            <div class="posts-index-item">
                {{-- <a href="/posts/{{ $post->id }}">{{ $post->content }}</a> --}}
                <a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->content }}</a>
            </div>
            @endforeach
        </div>
    </div>

@endsection