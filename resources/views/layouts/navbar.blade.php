@extends('layouts.app')
@section('styles')
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
@yield('sub_styles')
@endsection
@section('content')
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
<a class="navbar-brand" href="#">Salestracker</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav navbar-nav ml-auto">
  <li class="nav-item active">
      <a class="nav-link" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('track')}}">Track Calls</a>
    </li>
    <li class="nav-item dropdown Name">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      By Category
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">Win Telco</a>
      <a class="dropdown-item" href="#">Win Others</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Non-Telco</a>
      <a class="dropdown-item" href="#">Others</a>
    </div>
  </li>
  <li class="nav-item dropdown Name">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    By Status
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Green</a>
    <a class="dropdown-item" href="#">Red</a>
    <a class="dropdown-item" href="#">Amber</a>
  </div>
</li>
    <li class="nav-item dropdown Name">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{{ Auth::user()->name}}}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">Settings</a>
      <a class="dropdown-item" href="#">Export</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
    </div>
  </li>
  </ul>
  
</div>
</nav>
@yield('sub_content')
@yield('sub_script')
@endsection