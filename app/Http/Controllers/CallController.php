<?php

namespace App\Http\Controllers;
use Validator;
use View;
use App\Call;
use App\Log;
use Auth;
use Illuminate\Http\Request;

class CallController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    protected function add(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'clientName' => 'required|max:255',
            'processName' => 'required|max:255'
        ]);

        if($validator->fails()){
            return redirect('track')
            ->withErrors($validator)
            ->withInput();
        }
       
        else{
            //Adding New Call
            $call = new Call;
            $call->clientName = $request->clientName;
            $call->processName = $request->processName;
            $call->region = $request->region;
            $call->clientContactName = $request->clientContactName;
            $call->clientDesignation = $request->clientDesignation;
            $call->salesSpoc = $request->salesSpoc;
            $call->firstCall = $request->firstCall;
            $call->secondCall = $request->secondCall;
            $call->responsiblePerson = $request->responsiblePerson;
            $call->clientFeedback = $request->clientFeedback;
            $call->targetDate = $request->targetDate;
            $call->remarks = $request->remarks;
            $call->projectStartDate = $request->projectStartDate;
            $call->projectEndDate = $request->projectEndDate;
            $call->opportunityStatus = $request->opportunityStatus;
            $call->currentStatus = $request->currentStatus;
            $call->currentUpdates = $request->currentUpdates;
            $call->conversationalHistory = $request->conversationalHistory;
            $call->prodaptParticipants = $request->prodaptParticipants;
            $call->discussionPoints = $request->discussionPoints;
            $call->nextSteps = $request->nextSteps;
            $call->category = $request->category;
            $call->status = $request->status;
            $call->enabled = true;
            $call->created_at = now();
            $call->updated_at = now();       
            $call->save();


            //Adding Log
            $log = new Log;
            $log->processName = $request->processName;
            $log->action = 'added';
            $log->userName = auth()->user()->name;
            $log->save();
          return View::make('calls.success');
        }

    }


}
