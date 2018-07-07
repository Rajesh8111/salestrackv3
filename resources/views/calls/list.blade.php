@extends('layouts.navbar')
@section('sub_styles')
<link href="{{ asset('css/list.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('css/search-filter.css') }}" rel="stylesheet"> -->
@endsection
@section('sub_content')
<div class="container">
<div class="row header">
    Call List
</div>
<div class="row filters">
<!-- <div class="container">
        <form action="" class="searchFilter row search-form">
            <div class="input-group">
            <div class="input-group-prepend">
            <div class="button-group">
            <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 1</a></li>
      <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 2</a></li>
      <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 3</a></li>
      <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 4</a></li>
      <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 5</a></li>
      <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 6</a></li>
    </ul>
      </div>
            </div>
                <input type="text" class="form-control" placeholder="Search Here...">
                
                <div class="input-group-append">
                    <button class="btn btn-secondary">Search</button>
                </div>
            </div>    
        </form>   
</div>
</div> -->

<div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Search Here..." /><a id="dLabel" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href>Dropdown</a>
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
