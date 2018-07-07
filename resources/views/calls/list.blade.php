@extends('layouts.navbar')
@section('sub_styles')
<link href="{{ asset('css/list.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('css/search-filter.css') }}" rel="stylesheet"> -->
@endsection
@section('sub_content')
<div class="container-fluid">
<!-- <div class="row header">
    Call List
</div> -->
<div class="row filters">
<div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Search Here..." /><a id="dLabel" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" href>Dropdown</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">level 1</a></li>
        <li><a class="dropdown-item" href="#">level 1</a></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-submenu"><a class="dropdown-item" tabindex="-1" href="#">level 1</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" tabindex="-1" href="#">level 2</a></li>
                <li class="dropdown-submenu"><a class="dropdown-item" href="#">level 2</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">3rd level</a></li>
                        <li><a class="dropdown-item" href="#">3rd level</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-item" href="#">level 2</a></li>
                <li><a class="dropdown-item" href="#">level 2</a></li>
            </ul>
        </li>
    </ul>
    <div class="input-group-append"><button class="btn btn-light" type="button">Search</button></div>
</div>npmprettire
<div class="row lists">
    <div class="col-md-3">
    <div class="card list">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted d-inline  category">Category</h6>                                 
            <h4 class="card-title h5 processName">Process Name</h4>
            <h6 class="card-subtitle mb-2 text-muted d-inline clientName">Client Name </h6>-
            <h6 class="card-subtitle mb-2 text-muted d-inline region"> Region</h6><br>
            <h6 class="card-subtitle mb-2 text-muted d-inline salesSpoc">Sales SPOC</h6> 
            <a href="#!" class="card-link">Edit</a>
        </div>
        </div>
    </div>
    <div class="col-md-3">
    <div class="card list">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted d-inline  category">Category</h6>                                 
            <h4 class="card-title h5 processName">Process Name</h4>
            <h6 class="card-subtitle mb-2 text-muted d-inline clientName">Client Name </h6>-
            <h6 class="card-subtitle mb-2 text-muted d-inline region"> Region</h6><br>
            <h6 class="card-subtitle mb-2 text-muted d-inline salesSpoc">Sales SPOC</h6> 
            <a href="#!" class="card-link">Edit</a>
        </div>
        </div>
    </div><div class="col-md-3">
    <div class="card list">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted d-inline  category">Category</h6>                                 
            <h4 class="card-title h5 processName">Process Name</h4>
            <h6 class="card-subtitle mb-2 text-muted d-inline clientName">Client Name </h6>-
            <h6 class="card-subtitle mb-2 text-muted d-inline region"> Region</h6><br>
            <h6 class="card-subtitle mb-2 text-muted d-inline salesSpoc">Sales SPOC</h6> 
            <a href="#!" class="card-link">Edit</a>
        </div>
        </div>
    </div><div class="col-md-3">
    <div class="card list">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted d-inline  category">Category</h6>                                 
            <h4 class="card-title h5 processName">Process Name</h4>
            <h6 class="card-subtitle mb-2 text-muted d-inline clientName">Client Name </h6>-
            <h6 class="card-subtitle mb-2 text-muted d-inline region"> Region</h6><br>
            <h6 class="card-subtitle mb-2 text-muted d-inline salesSpoc">Sales SPOC</h6> 
            <a href="#!" class="card-link">Edit</a>
        </div>
        </div>
    </div><div class="col-md-3">
    <div class="card list">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted d-inline  category">Category</h6>                                 
            <h4 class="card-title h5 processName">Process Name</h4>
            <h6 class="card-subtitle mb-2 text-muted d-inline clientName">Client Name </h6>-
            <h6 class="card-subtitle mb-2 text-muted d-inline region"> Region</h6><br>
            <h6 class="card-subtitle mb-2 text-muted d-inline salesSpoc">Sales SPOC</h6> 
            <a href="#!" class="card-link">Edit</a>
        </div>
        </div>
    </div><div class="col-md-3">
    <div class="card list">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted d-inline  category">Category</h6>                                 
            <h4 class="card-title h5 processName">Process Name</h4>
            <h6 class="card-subtitle mb-2 text-muted d-inline clientName">Client Name </h6>-
            <h6 class="card-subtitle mb-2 text-muted d-inline region"> Region</h6><br>
            <h6 class="card-subtitle mb-2 text-muted d-inline salesSpoc">Sales SPOC</h6> 
            <a href="#!" class="card-link">Edit</a>
        </div>
        </div>
    </div><div class="col-md-3">
    <div class="card list  status-green">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted d-inline  category">Category</h6>                                 
            <h4 class="card-title h5 processName">Process Name</h4>
            <h6 class="card-subtitle mb-2 text-muted d-inline clientName">Client Name </h6>-
            <h6 class="card-subtitle mb-2 text-muted d-inline region"> Region</h6><br>
            <h6 class="card-subtitle mb-2 text-muted d-inline salesSpoc">Sales SPOC</h6> 
            <a href="#!" class="card-link">Edit</a>
        </div>
        </div>
    </div><div class="col-md-3">
    <div class="card list">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted d-inline  category">Category</h6>                                 
            <h4 class="card-title h5 processName">Process Name</h4>
            <h6 class="card-subtitle mb-2 text-muted d-inline clientName">Client Name </h6>-
            <h6 class="card-subtitle mb-2 text-muted d-inline region"> Region</h6><br>
            <h6 class="card-subtitle mb-2 text-muted d-inline salesSpoc">Sales SPOC</h6> 
            <a href="#!" class="card-link">Edit</a>
        </div>
        </div>
    </div>
</div>
</div>
@section('sub_script')
<script src="{{ asset('js/filterView.js') }}"></script>
@endsection
@endsection
