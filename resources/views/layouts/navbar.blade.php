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
  
      <a class="nav-link" href="{{route('home')}}">
      <i class="material-icons">
       home
      </i>Home</a>
    </li>
    <li class="nav-item ">

      <a class="nav-link" href="{{route('track')}}">
      <i class="material-icons">
       phone_in_talk
      </i>
      Track Calls</a>
    </li>
    <li class="nav-item ">

      <a class="nav-link" href="{{route('track')}}">
      <i class="material-icons">
       pageview
      </i>
      View Calls</a>
    </li>
    
    <li class="nav-item dropdown Name">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="material-icons">
perm_identity
</i>
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
@section('script')
@yield('sub_script')
@endsection
@endsection