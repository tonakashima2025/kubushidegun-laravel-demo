@extends('layouts.app')

@section('content')

    <div class="main posts-show">
        <div class="container">
            <div class="posts-show-item">
                <p>
                    {{ $post->content }}
                </p>
                <div class="post-time">
                    {{ $post->created_at }}
                </div>
                <div class="post-menus">
                    {{-- <a href="/posts/{{ $post->id }}/edit">編集</a> --}}
                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}">編集</a>
                    {{-- <form method="POST" action="/posts/{{ $post->id }}/destroy"> --}}
                    <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">
                        @csrf
                        <input type="submit" value="削除">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection