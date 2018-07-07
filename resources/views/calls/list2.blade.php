@extends('layouts.navbar')
@section('sub_styles')
<link href="{{ asset('css/list.css') }}" rel="stylesheet">
<link href="{{ asset('dataTable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('dataTable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('dataTable/css/buttons.dataTables.min.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('css/search-filter.css') }}" rel="stylesheet"> -->
@endsection
@section('sub_content')
<div class="container-fluid">
<!-- <div class="row header">
    Call List
</div> -->
<div class="row filters">
<div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text">
    <i class="material-icons" style="font-size:16px;">
search
</i>
    </span></div>
    <input class="form-control" type="text" placeholder="Search Here..." id="searchText"/>
    <div class="input-group-append">
    <select class="custom-select" id="column">
<option selected="" value="-1">Any</option>
<option  value="0">Category</option>
<option value="1">Process Name</option>
<option value="2">Client Name</option>
<option value="3">Region</option>
<option value="4">Sales SPOC</option>
<option value="5">Status</option>
</select>
</div>
</div>
<div class="row edit">
</div>
<div class="row lists">

<table id="example" class="display table table-striped table-bordered" width="100%">

<thead>
            <tr>
            <th></th>
            <th>Category</th>
                <th>Process Name</th>
                <th>Client Name</th>
                <th>Region</th>
                <th >Sales SPOC</th>
                <th >Status</th>
            </tr>
        </thead>
<tbody>
            @foreach ($calls as $key=>$call)
            
                <tr class="{{$call->status}}">
                <td>
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input check" data-id={{$call->id}} id={{'customCheck'.($key+1)}}>
                <label class="custom-control-label" for={{'customCheck'.($key+1)}}></label>
                </div>
                </td>
                <td>{{$call->category}}</td>
                <td>{{$call->processName}}</td>
                <td>{{$call->clientName}}</td>
                <td>{{$call->region}}</td>
                <td>{{$call->salesSpoc}}</td>
                <td>{{$call->status}}</td>
                
                </tr>
            @endforeach
</tbody>
</table>
</div>
</div>

@section('sub_script')
<script src="{{ asset('js/filterView.js') }}">

</script>
@endsection
@endsection
