@extends('layouts.app')
@section('title', "Beranda")
@section('content')
        <a href="{{ url('posts/create') }}" class="btn btn-outline-secondary">+ Buat Post</a>
        <a href="{{ url('posts/trash') }}" class="btn btn-outline-danger">Riwayat</a>

        <p class="text-muted">Total Postingan Aktif : <span class="badge bg-success">{{ $total_active }}</span> / Total postingan non Aktif : <span class="badge bg-warning">{{ $total_nonActive }}</span> / Total postingan dihapus : <span class="badge bg-danger">{{ $total_dihapus }}</span> </p>

        @foreach($posts as $p)

        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title">{{ $p->title }}</h5>
                <p class="card-text">{{ $p->content }}</p>
                <p class="card-text"><small class="text-muted">Created At {{ date("d M Y H:i", strtotime($p->created_at)) }}</small></p>
                <a href="{{ url("posts/$p->slug") }}" class="btn btn-outline-success">Selengkapnya</a>
                <a href="{{ url("posts/$p->slug/edit") }}" class="btn btn-outline-secondary"><i class="fa-solid fa-pen"></i></a>
            </div>

        </div>
        @endforeach

@endsection