@extends('layouts.app')
@section('title', "Edit Postingan")
@section('content')
<div class="container">

    <h1 class="text-center my-4">Edit Postingan</h1>

    <form method="post" action="{{ url("posts/$posts->slug") }}">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" value="{{ $posts->title }}" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" rows="3" value="{{ $posts->content }}" name="content" required>{{ $posts->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-secondary"><i class="fa-solid fa-floppy-disk"></i></button>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i></button>

    </form>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin Mau Hapus ?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin mau hapus konten <span class="text-danger fw-bold">"{{ $posts->title }}"</span> ini? Sepertinya kamu mau beraksi nekat nih! Awas, tindakan ini tidak bisa dibatalkan loh. Kalo kamu tetep yakin, klik hapus aja ya. Tapi kalo kamu ragu-ragu, mendingan batalkan dan cek lagi deh apa beneran harus hapus konten ini.
                </div>
                <div class="modal-footer">
                    <form action="{{ url("posts/$posts->slug" )}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nda Jadi</button>
                        <button type="submit" class="btn btn-primary">Iya Yakin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection