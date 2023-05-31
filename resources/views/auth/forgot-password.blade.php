@extends('layouts.app')
@section('title', 'Forgot Password')

@section('content')

    <div class="row">
        <div class="col-md-4 mx-auto mt-5 mb-5">
            <div class="card">
                <h3 class="text-center mt-4">Forgot Password</h3>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Send Request Link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
