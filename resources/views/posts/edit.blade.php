@extends('layouts.app')

@section('content')

    <div class="main posts-new">
        <div class="container">
            <h1 class="form-heading">編集する</h1>
            {{-- <form action="/posts/{{ $post->id }}/update" method="POST"> --}}
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
                @csrf
                <div class="form">
                    <div class="form-body">
                        <textarea name="content">{{ $post->content }}</textarea>
                        <input type="submit" value="保存">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
