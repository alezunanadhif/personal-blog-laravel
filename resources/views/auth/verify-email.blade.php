@extends('layouts.app')
@section('title', 'Verification Email')

@section('content')

    <div class="row">
        <div class="col-md-4 mx-auto mt-5 mb-5">
            <div class="card">
                <h3 class="text-center mt-4">Verify Email</h3>
                <p class="p-0 m-0 align-baseline text-center">Before proceed, please check your email for verification</p>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            Email Berhasil di Verifikasi
                        </div>
                    @endif
                    <form action="{{route('verification.send')}}" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{__('click here to resend verification email')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
