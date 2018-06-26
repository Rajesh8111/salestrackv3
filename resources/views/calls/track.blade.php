@extends('layouts.navbar')
@section('sub_styles')
<link href="{{ asset('css/track.css') }}" rel="stylesheet">
@endsection
@section('sub_content')
<div class="container-fluid main">
    <div class="row form">
        <div class="col-md-12 card">
        <div class="card-body">

        <div class="card-title h3 text-center">Track New Call</div>
        
        <form method="POST" action="{{ route('call/add') }}">
        {{ csrf_field() }}
        <!-- Status Radio Buttons -->
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="green" name="status" value="green" class="custom-control-input" checked="checked">
        <label class="custom-control-label text-green" for="green">Green</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="amber" name="status" value="amber" class="custom-control-input">
        <label class="custom-control-label text-amber" for="amber">Amber</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="red" name="status" value="red" class="custom-control-input" >
        <label class="custom-control-label text-red" for="red">Red</label>
        </div>
        <ul class="errors">
                <div class="form-group">
                    <label for="category" class="bmd-label-floating">Category</label>
                    <select class="form-control" id="callCategory" name="category">
                    <option>Win Telco</option>
                    <option>Non Telco</option>
                    <option>Other Telco</option>
                    <option>Others</option>
                    </select>
                </div>
                <div class="form-row mt5">
                    <div class="col-md-3">
                        <label class="" for="clientName">Client Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 form-control{{ $errors->has('clientName') ? ' is-invalid' : '' }}" id="clientName" name="clientName" >
                        @if ($errors->has('clientName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('clientName') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="col-md-3">
                        <label class="" for="processName">Process Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 form-control{{ $errors->has('processName') ? ' is-invalid' : '' }}" id="processName" name="processName" >
                        @if ($errors->has('processName'))

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('processName') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="col-md-3">
                        <label class="" for="region">Region</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="region" name="region">
                    </div>
                    <div class="col-md-3">
                        <label class="" for="clientContactName">Client Contact Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="clientContactName" name="clientContactName" >
                    </div>
                </div>
                <div class="form-row mt5">
                    <div class="col-md-3">
                        <label class="" for="clientDesignation">Client Designation</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="clientDesignation" name="clientDesignation" >
                    </div>
                    <div class="col-md-3">
                        <label class="" for="salesSpoc">Sales Spoc</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="salesSpoc" name="salesSpoc">
                    </div>
                    <div class="col-md-3">
                        <label class="" for="firstMeet">First Call</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                            <input type="text" class="form-control" id="firstCall" name="firstCall">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-th"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="" for="secondMeet">Second Call</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                            <input type="text" class="form-control" id="secondCall" name="secondCall">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-th"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row mt5">
                    <div class="col-md-3">
                        <label class="" for="responsiblePerson">Responsible Person</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="responsiblePerson" name="responsiblePerson" >
                    </div>
                    <div class="col-md-3">
                        <label class="" for="clientFeedback">Client Feedback</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="clientFeedback" name="clientFeedback" >
                    </div>
                    <div class="col-md-3">
                    <label class="" for="targetDate">Target Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                            <input type="text" class="form-control" id="targetDate" name="targetDate">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-th"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="" for="remarks">Remarks</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="remarks" name="remarks" >
                    </div>
                    
                </div>
                <div class="form-row mt5">
                    <div class="col-md-3">
                    <label class="" for="projectStartDate">Project Start Date</label>
                    <div id="sandbox-container">
                        <div class="input-group date">
                        <input type="text" class="form-control" id="projectStartDate" name="projectStartDate">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th"></i>
                        </span>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <label class="" for="projectEndDate">Project End Date</label>
                    <div id="sandbox-container">
                        <div class="input-group date">
                        <input type="text" class="form-control" id="projectEndDate" name="projectEndDate">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th"></i>
                        </span>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="currentStatus" class="bmd-label-floating">Current Status</label>
                        <select class="form-control" id="currentStatus" name="currentStatus">
                        <option value=""></option>
                        <option value="Demo">Demo</option>
                        <option value="Kick off call">Kick off call</option>
                        <option value="POT">POT</option>
                        <option value="POC">POC</option>
                        <option value="SOW Sign Off">SOW Sign Off</option>
                        <option value="OLA Sign Off">OLA Sign Off</option>
                        <option value="Resource Allocation">Resource Allocation</option>
                        <option value="Process Walkthrough">Process Walkthrough</option>
                        <option value="Testing">Testing</option>
                        <option value="Deployment">Deployment</option>
                        <option value="Process Change">Process Change</option>

                        </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="" for="opportunityStatus">Opportunity Status</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="opportunityStatus" name="opportunityStatus" >
                    </div>
                </div>
                <div class="form-row  justify-content-between">
                <div class="btn-group w-100" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-default w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#currentUpdatesModal">Current Updates</button>
                            <button type="button" class="btn btn-secondary w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#conversationalHistoryModal">Conversational History</button>
                            <button type="button" class="btn btn-default w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#prodaptParticipantsModal">Prodapt Participants</button>
                            <button type="button" class="btn btn-secondary w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#discussionPointsModal">Discussion Points</button>
                            <button type="button" class="btn btn-default w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#nextStepsModal">Next Steps</button>

                <!-- </div>
                    <div class="col-md-2 mt-5">
                        <button type="button" class="btn btn-secondary w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#currentUpdatesModal">Current Updates</button>
                    </div>
                    <div class="col-md-2 mt-5">
                        <button type="button" class="btn btn-secondary w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#conversationalHistoryModal">Conversational History</button>
                    </div>
                    <div class="col-md-2 mt-5">
                    <button type="button" class="btn btn-secondary w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#prodaptParticipantsModal">Prodapt Participants</button>
                    </div>
                    <div class="col-md-2 mt-5">
                    <button type="button" class="btn btn-secondary w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#discussionPointsModal">Discussion Points</button>
                    </div>
                    <div class="col-md-2 mt-5">
                    <button type="button" class="btn btn-secondary w-100"  data-dismiss="modal" 
                            data-toggle="modal" data-target="#nextStepsModal">Next Steps</button>
                    </div> -->
                </div>
                </div>
                <div class="form-row justify-content-between">
                <button type="submit" class="btn bg-primary text-white mt-5 ps-5">Submit</button>
                <button type="button" class="btn bg-primary text-white mt-5 ps-5">Back</button>
                <!-- <button type="submit" class="btn bg-primary text-white mt-5 ps-5 center">Back</button> -->
                </div>
            
           

            <!-- Modal for Current Updates -->
            <div class="modal" id="currentUpdatesModal" tabindex="-1" role="dialog" aria-labelledby="currentUpdatesModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="currentUpdatesLabel">Current Updates</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <textarea class="form-control bg-white cursor-disabled"  id="currentUpdates" name="currentUpdates" cols="75" rows="15" readonly></textarea>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="currentUpdatesText"  aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                            <button class="btn btn-default" type="button" data-id="currentUpdates" data-append="currentUpdatesText">Append</button>
                            </div>
                            <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button" data-id="currentUpdates">Edit</button>
                            </div>
                        </div>
                </div>
                </div> 
                </div>
            </div>
            

            <!-- Modal for Conversational History -->
            <div class="modal" id="conversationalHistoryModal" tabindex="0" role="dialog" aria-labelledby="conversationalHistoryModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="conversationalHistoryLabel">Conversational History</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <textarea class="form-control bg-white cursor-disabled"  id="conversationalHistory" name="conversationalHistory" cols="75" rows="15" readonly></textarea>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"  id="conversationalHistoryText" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                            <button class="btn btn-default" type="button" data-id="conversationalHistory" data-append="conversationalHistoryText">Append</button>
                            </div>
                            <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button" data-id="conversationalHistory">Edit</button>
                            </div>
                        </div>
                </div>
                </div>
            </div>  
            </div>

            <!-- Modal for prodaptParticipants -->
            <div class="modal" id="prodaptParticipantsModal" tabindex="0" role="dialog" aria-labelledby="prodaptParticipantsModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="prodaptParticipantsLabel">Prodapt Participants</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <textarea class="form-control bg-white cursor-disabled" name="prodaptParticipants" id="prodaptParticipants" cols="75" rows="15" readonly></textarea>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"  id="prodaptParticipantsText" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                            <button class="btn btn-default" type="button" data-id="prodaptParticipants" data-append="prodaptParticipantsText">Append</button>
                            </div>
                            <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button" data-id="prodaptParticipants">Edit</button>
                            </div>
                        </div>
                </div>
                </div>
            </div>  
            </div>

            <!-- Modal for discussionPoints-->
            <div class="modal" id="discussionPointsModal" tabindex="0" role="dialog" aria-labelledby="discussionPointsModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="discussionPointsLabel">Discussion Points</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <textarea class="form-control bg-white cursor-disabled" name="discussionPoints" id="discussionPoints" cols="75" rows="15" readonly></textarea>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"  id="discussionPointsText" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                            <button class="btn btn-default" type="button" data-id="discussionPoints" data-append="discussionPointsText">Append</button>
                            </div>
                            <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button" data-id="discussionPoints">Edit</button>
                            </div>
                        </div>
                </div>
                </div>
            </div>  
            </div>

            <!-- Modal for nextSteps-->
            <div class="modal" id="nextStepsModal" tabindex="0" role="dialog" aria-labelledby="nextStepsModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nextStepsLabel">Next Steps</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <textarea class="form-control bg-white cursor-disabled" name="nextSteps" id="nextSteps" cols="75" rows="15" readonly></textarea>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"  id="nextStepsText" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                            <button class="btn btn-default" type="button" data-id="nextSteps" data-append="nextStepsText">Append</button>
                            </div>
                            <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button" data-id="nextSteps">Edit</button>
                            </div>
                        </div>
                </div>
                </div>
            </div>  
            </div>
        </form>
        </div>
        </div>
    </div>
</div>
@endsection
