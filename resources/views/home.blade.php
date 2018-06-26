@extends('layouts.navbar')
@section('sub_styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
@section('sub_content')
<div class="container-fluid main">
    <div class="row padding-around justify-content-around">
        <div class="col-md-9 ">
            <!-- Main Content -->
                <img class="img-fluid" src="{{ asset('images/call.jpg') }}" alt="Call">
        </div>
        <div class="col-md-3">
            <!-- Recent Activities -->
            <div class="rActivities">
                <div class="header h4 text-center">Recent Activities</div>
                <div class="notice notice-success">
                <strong>Notice</strong> notice-success
                </div> <div class="notice notice-danger">
                    <strong>Notice</strong> notice-danger
                </div>
                <div class="notice notice-info">
                    <strong>Notice</strong> notice-info
                </div>
                <div class="notice notice-warning">
                    <strong>Notice</strong> notice-warning
                </div>
                <div class="notice notice-lg">
                    <strong>Big notice</strong> notice-lg
                </div>
                <div class="notice notice-sm">
                    <strong>Small notice</strong> notice-sm
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
