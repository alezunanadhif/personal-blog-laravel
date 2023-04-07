@extends('layouts.app')
@section('title', "Selengkapnya")
@section('content')
<div class="container">
    <article class="blog-post mt-4">
        <h2 class="blog-post-title mb-1">{{ $posts->title }}</h2>
        <p class="blog-post-meta">{{ date("d M Y H:i", strtotime($posts->created_at)) }}</p>

        <p>{{ $posts->content }}</p>
    </article>

    <p class="text-muted">{{ $total }} Komentar</p>
    @foreach($comments as $comment)
    <div class="card">
        <div class="card-body">
            <p>{{ $comment->comment }}</p>
        </div>
    </div>
    @endforeach

    <a href="{{ url('posts') }}" class="btn btn-outline-success">Kembali</a>
</div>
@endsection