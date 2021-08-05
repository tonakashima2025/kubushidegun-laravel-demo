@extends('layouts.app')

@section('content')

    <div class="main posts-new">
        <div class="container">
            <h1 class="form-heading">投稿する</h1>
            <form action="{{ route('posts.create') }}" method="POST">
                @csrf
                <div class="form">
                    <div class="form-body">
                        <textarea name="content"></textarea>
                        <input type="submit" value="投稿">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection