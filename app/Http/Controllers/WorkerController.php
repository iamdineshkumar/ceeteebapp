<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Company;
use Illuminate\Http\Request;
use Validator;
use App\Models\ContractorMaster;
use App\Models\Worker;



class WorkerController extends Controller
{

    
    public function workerList() {
        $workers=Worker::with('company','branch','contractor')->get();
        return view('workers',compact('workers'));
    }

    public function popupDetails($type) {
        switch($type){
            case 'Worker' : 

                $companies = Company::select('Company_ID','Company_Name')->get();
                $branches = Branch::select('Branch_ID','BranchName','Company_ID')->get();
                $contractors = ContractorMaster::select('id','Contractor_Name')->get();
                 // $mesthiries = Mesthiry::select('id','name')->get();
                 $mesthiries[] = ['id'=>1,'name'=>'testMesthiry'];

                   // $workunits = Workunit::select('id','name')->get();
                   $workunits[] = ['id'=>1,'name'=>'testWorkunit'];

                return view('worker-form',compact('companies','branches','contractors','mesthiries','workunits'));
                break;
        }
    }

    //workers
    public function addEditWorker(Request $request){
        $worker = new Worker();
        $message = "Worker added successfully";
        if($request->worker_id) {
            $worker = Worker::find($request->worker_id);
            $message = "Worker updated successfully";
        }
        $validator = Validator::make($request->all(),[  
        'name'           => 'required',
        'gender'         => 'required',
        'dob'            => 'required',
        'address'        => 'required',
        'mobile'         => 'required|digits:10',
        'email'          => 'required|email|unique:workers,email,'.$worker->id,
        'company_id'    => 'required',
        'branch_id'     => 'required',
        'id_proof_type'            => 'required',
        'id_proof_number'          => 'required',
        'labour_classification'            => 'required',
        'bank_account_no'          => 'required',
        'bank_account_holder_name'            => 'required',
        'ifsc'          => 'required',
        'bank_name'          => 'required',
        'bank_branch_name'            => 'required',
        'contractor_id'          => 'required',
        'mesthiry_id'            => 'required',
        'work_unit'          => 'required']);

        if($validator->fails()) {

            return response()->json([
                'status'  => 0,
                'message' => $validator->errors()
            ]);
        }

      
        
        $worker->name = $request->name;
        $worker->gender=$request->gender;
        $worker->dob=$request->dob;
        $worker->address=$request->address;
        $worker->mobile=$request->mobile;
        $worker->email=$request->email;
        $worker->company_id=$request->company_id;
        $worker->branch_id=$request->branch_id;
        $worker->id_proof_type=$request->id_proof_type;
        $worker->id_proof_no=$request->id_proof_number;
        $worker->labour_classification=$request->labour_classification;
        $worker->bank_account_no=$request->bank_account_no;
        $worker->bank_account_holder_name=$request->bank_account_holder_name;
        $worker->ifsc=$request->ifsc;
        $worker->bank_name=$request->bank_name;
        $worker->bank_branch_name=$request->bank_branch_name;
        $worker->contractor_id=$request->contractor_id;
        $worker->mesthiry_id=$request->mesthiry_id;
        $worker->work_unit=$request->work_unit;
        $worker->remarks=$request->remarks;
        

        $worker->save();

        return response()->json([
            'status'       => 1,
            'message'      => $message,
            'callFunction' => 'fetchWorkerList();'
        ]);

    }
    public function workerDelete($id){
        $worker = Worker::find($id);
        if($worker) {
            $worker->delete();
            return response()->json([
                'status'       => 1,
                'message'      => "Worker deleted successfully"
            ]); 
        } else {
            return response()->json([
                'status'       => 0,
                'message'      => "Something went wrong"
            ]); 
        }
    }
    public function editWorker($id){
        $worker=Worker::find($id);
        if($worker){
            $companies = Company::select('Company_ID','Company_Name')->get();
                $branches = Branch::select('Branch_ID','BranchName','Company_ID')->get();
                $contractors = ContractorMaster::select('id','Contractor_Name')->get();
                 // $mesthiries = Mesthiry::select('id','name')->get();
                 $mesthiries[] = ['id'=>1,'name'=>'testMesthiry'];
                   // $workunits = Workunit::select('id','name')->get();
                   $workunits[] = ['id'=>1,'name'=>'testWorkunit'];
            return view('worker-form',compact('companies','branches','contractors','mesthiries','workunits','worker'));
        }
        else {
            return response()->json([
                'status'       => 0,
                'message'      => "Something went wrong"
            ]); 
        }
    }
}




    
    