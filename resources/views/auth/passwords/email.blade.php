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
        <div class="col-md-5  justify-content-center">
            <div class="card middle">
                <div class="card-header h5">Salestracker</div>

                <div class="card-body">
                <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                @csrf

                <div class="input-group row">

                   
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    
                </div>
<br>
                <div class="form-group row mb-0" >
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn bg-primary text-white">
                            {{ __('Send Password Reset Link') }}
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
