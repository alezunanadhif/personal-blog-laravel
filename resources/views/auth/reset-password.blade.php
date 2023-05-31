@extends('layouts.app')
@section('title', "Reset Password")

@section('content')

<div class="row">
    <div class="col-md-4 mx-auto mt-5 mb-5">
        <div class="card">
            <h3 class="text-center mt-4">
                Reset Password
            </h3>
            <div class="card-body">
                <form method="post" action="{{ route('password.update')}}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email', $request->email) }}">
                        @if($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('email')}}</small>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        @if($errors->has('password'))
                        <small class="text-danger">{{ $errors->first('password')}}</small>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmatiom" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection