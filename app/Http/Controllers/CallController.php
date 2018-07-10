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

    protected function list(){

        // <th>Category</th>
        //         <th>Process Name</th>
        //         <th>Client Name</th>
        //         <th>Region</th>
        //         <th >Sales SPOC</th>
        //         <th >Status</th>
        //         <th>Edit</th>
        $calls = Call::where('enabled',1)->get(['category','processName','clientName','region','salesSpoc','status','id']);
        return View::make('calls.list2')->with('calls',$calls);
    }

    protected function edit($call_id){
        
                $call = Call::where('enabled',1)->where('id',$call_id)->get();
                return View::make('calls.edit')->with([
                    'call'=>$call[0],
                    'id'=>$call_id,
                ]);
            }


    protected function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'clientName' => 'required|max:255',
            'processName' => 'required|max:255'
        ]);

        if($validator->fails()){
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }
        
        else{
            //Adding New Call
            $call = Call::find($id);
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
            $call->update();


            //Update Log
            $log = new Log;
            $log->processName = $request->processName;
            $log->action = 'updated';
            $log->userName = auth()->user()->name;
            $log->save();
            return View::make('calls.success');
        }

    }
    protected function delete($call_id){
        
                $call = Call::find($call_id);
                $call->enabled = 0;
                $call->update();

                //Delete Log
            $log = new Log;
            $log->processName = $call->processName;
            $log->action = 'deleted';
            $log->userName = auth()->user()->name;
            $log->save();
            return redirect('list');
            }
}
