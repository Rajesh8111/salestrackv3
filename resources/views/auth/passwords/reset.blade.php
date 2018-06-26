@extends('layouts.app')
@section('styles')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row full-height">
        <div class="col-md-2 bg-primary h-100">
            <img class="middle center men img-fluid" src="{{ asset('images/men.png') }}" alt="">
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-4  justify-content-center">
            <div class="card middle">
                <div class="card-header h5">Salestracker</div>

                <div class="card-body">
                <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
