@extends('layouts.app')
@section('title', "Buat Postingan")
@section('content')
<div class="container">
    <form action="{{ url('posts') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" rows="3" name="content" required></textarea>
        </div>
        <button type="submit" class="btn btn-outline-secondary">Simpan</button>
    </form>
</div>
@endsection