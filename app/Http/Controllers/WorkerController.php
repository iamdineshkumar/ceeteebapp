<?php

namespace App\Http\Controllers;

use App\Models\Booking_Details;
use App\Models\Branch;
use App\Models\Company;
use Illuminate\Http\Request;
use Validator;
use App\Models\ContractorMaster;
use App\Models\Contractor_Category;
use App\Models\Masters\Ceetee_usercreation;
use App\Models\Worker;
use App\Models\Worker_attendance;
use App\Models\WorkersDocs;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{


    public function workerList()
    {
        if (session()->missing('user') )
            return redirect(url('/'));

        $workers = Worker::with('company', 'branch', 'contractor','labour')->get();
        return view('workers/workers-list', compact('workers'));
    }

    public function addWorker()
    {
        if (session()->missing('user') )
            return redirect(url('/'));
        $companies = Company::select('Company_ID', 'Company_Name')->get();
        $branches = Branch::select('Branch_ID', 'BranchName', 'Company_ID')->get();
        $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
        $labourClassification = Contractor_Category::select('Category_ID', 'Category_Name')->get();
        // $mesthiries = Mesthiry::select('id','name')->get();
        $mesthiries[] = ['id' => 1, 'name' => 'testMesthiry'];
        // $workunits = Workunit::select('id','name')->get();
        $workunits[] = ['id' => 1, 'name' => 'testWorkunit'];
        $formType = 'Add';
        return view('workers/worker-form', compact('formType', 'companies', 'branches', 'contractors', 'mesthiries', 'workunits','labourClassification'));
    }
    public function register()
    {

        $companies = Company::select('Company_ID', 'Company_Name')->get();
        $branches = Branch::select('Branch_ID', 'BranchName', 'Company_ID')->get();
        $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
        $labourClassification = Contractor_Category::select('Category_ID', 'Category_Name')->get();
        // $mesthiries = Mesthiry::select('id','name')->get();
        $mesthiries[] = ['id' => 1, 'name' => 'testMesthiry'];
        // $workunits = Workunit::select('id','name')->get();
        $workunits[] = ['id' => 1, 'name' => 'testWorkunit'];
        $formType = 'Add';
        return view('workers/registration-form-worker', compact('formType', 'companies', 'branches', 'contractors', 'mesthiries', 'workunits','labourClassification'));
    }
    //workers
    public function addEditWorker(Request $request)
    {
        $worker = new Worker();
        $message = "Worker added successfully";
        if ($request->worker_id) {
            $worker = Worker::find($request->worker_id);
            $message = "Worker updated successfully";
        }
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'gender'         => 'required',
            'dob'            => 'required',
            'address'        => 'required',
            'mobile'         => 'required|digits:10|unique:workers,mobile,'.$worker->id,
            'company_id'     => 'required',
            'branch_id'         => 'required',
            'id_proof_type'     => 'required',
            'id_proof_number'          => 'required',
            'labour_classification'     => 'required',
            'bank_account_no'           => 'required',
            'bank_account_holder_name'  => 'required',
            'ifsc'                      => 'required',
            'bank_name'                 => 'required',
            'bank_branch_name'          => 'required',
            'contractor_id'             => 'required',
            'mesthiry_id'               => 'required',
            'work_unit'                 => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json([
                'status'  => 0,
                'message' => $validator->errors()
            ]);
        }



        $worker->name = $request->name;
        $worker->gender = $request->gender;
        $worker->dob = $request->dob;
        $worker->address = $request->address;
        $worker->mobile = $request->mobile;
        $worker->email = $request->email;
        $worker->company_id = $request->company_id;
        $worker->branch_id = $request->branch_id;
        $worker->id_proof_type = $request->id_proof_type;
        $worker->id_proof_no = $request->id_proof_number;
        $worker->labour_classification = $request->labour_classification;
        $worker->bank_account_no = $request->bank_account_no;
        $worker->bank_account_holder_name = $request->bank_account_holder_name;
        $worker->ifsc = $request->ifsc;
        $worker->bank_name = $request->bank_name;
        $worker->bank_branch_name = $request->bank_branch_name;
        $worker->contractor_id = $request->contractor_id;
        $worker->mesthiry_id = $request->mesthiry_id;
        $worker->work_unit = $request->work_unit;
        $worker->remarks = $request->remarks;
        $worker->status = 1;
        $worker->active = 0;


        $worker->save();

        if ($request->worker_id) {
            $existuser = Ceetee_usercreation::select('*')->where('user_id',$request->worker_id)->first();
            
            if(!empty($existuser)){
                $user = Ceetee_usercreation::find($existuser->id);
                $user->username = $worker->name;
                $user->login_name = $worker->mobile;
                $user->password = $worker->name.'@'.date('Y');
                $user->remarks = $worker->remarks;
                $user->save(); 
            }
        }
        if (!empty($request->documents)) {
            $id = $worker->id;
            foreach ($request->documents as $key => $document) {
                $worker_docs = new WorkersDocs();

                $docName = $id . '-' . time() . '-' . str_replace(' ', '-', $document->getClientOriginalName());
                $worker_docs->doc_name = $id . '-' . time() . '-' . str_replace(' ', '-', $document->getClientOriginalName());
                if (in_array($document->extension(), ['doc', 'docx', 'pdf', 'png', 'jpeg', 'xlsx', 'txt']))
                    $worker_docs->doc_type = 'Document';
                if (in_array($document->extension(), ['mp3', 'm4a', 'wav']))
                    $worker_docs->doc_type = 'Audio';
                if (in_array($document->extension(), ['mp4', 'wma', 'avi']))
                    $worker_docs->doc_type = 'Video';
                $worker_docs->workerId = $id;
                $worker_docs->date = Carbon::now();
                $document->move(public_path('upload/worker/'), $docName);

                $worker_docs->doc_location = 'upload/worker/' . $docName;
                $worker_docs->save();
            }
        }


        return response()->json([
            'status'       => 1,
            'message'      => $message
        ]);
    }
    public function workerDelete(Request $request)
    {
        $worker = Worker::find($request->workerid);
        if ($worker) {
            $docs = Worker::with('docs')->whereId($request->workerid)->get();
            foreach ($docs[0]->docs as $doc) {
                $worker_docs = WorkersDocs::find($doc->id);
                if (file_exists(public_path($worker_docs->doc_location))) {
                    unlink(public_path($worker_docs->doc_location));
                }
                $worker_docs->delete();
            }

            $worker->delete();
            return back()->with('message', 'Worker Deleted Successfully');
        } else {
            return back()->withErrors("Something went wrong while deleting Worker");
        }
    }
    public function editWorker($id)
    {
        $worker = Worker::find($id);
        if ($worker) {
            $companies = Company::select('Company_ID', 'Company_Name')->get();
            $branches = Branch::select('Branch_ID', 'BranchName', 'Company_ID')->get();
            $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
            $labourClassification = Contractor_Category::select('Category_ID', 'Category_Name')->get();
            // $mesthiries = Mesthiry::select('id','name')->get();
            $mesthiries[] = ['id' => 1, 'name' => 'testMesthiry'];
            // $workunits = Workunit::select('id','name')->get();
            $workunits[] = ['id' => 1, 'name' => 'testWorkunit'];
            $formType = 'Edit';
            return view('workers/worker-form', compact('formType', 'companies', 'branches', 'contractors', 'mesthiries', 'workunits', 'worker','labourClassification'));
        } else {
            return response()->json([
                'status'       => 0,
                'message'      => "Something went wrong"
            ]);
        }
    }
    public function statusChange($id)
    {
        $worker = Worker::find($id);
        if ($worker) {
            return view('workers/worker-status-change', compact('worker'));
        } else {
            return response()->json([
                'status'       => 0,
                'message'      => "Something went wrong"
            ]);
        }
    }
    public function statusUpdate(Request $request)
    {
        $worker = Worker::find($request->worker_id);
        if ($worker) {
            $existuser = Ceetee_usercreation::select('*')->where('user_id',$request->worker_id)->first();
            $user=new Ceetee_usercreation();
            if(!empty($existuser)){
                $user = Ceetee_usercreation::find($existuser->id);
            }
            $user->date = Carbon::now();
            $user->user_id = $worker->id;
            $user->user_type = 'Workers';
            $user->username = $worker->name;
            $user->login_name = $worker->mobile;
            $user->password = $worker->name.'@'.date('Y');
            $user->remarks = $worker->remarks;
            $user->status = "Open";
            $user->action = 0;
            if($request->status==1){
                
                $user->status = "Open";
                $user->action = 0;
                $worker->status = 1;
                $worker->active = 0;
                $worker->statusDate =null;
                $worker->statusDoneBy = null;
            }
            if($request->status==2){
                $validator = Validator::make($request->all(), [
                    'statusRemarks'  => 'required',
                ]);
                $user->status = "Cancelled";
                $worker->status = 3;
                $worker->active = 0;
                $user->action = 0;
                $worker->statusDate =null;
                $worker->statusDoneBy = null;
                if ($validator->fails()) {
        
                    return response()->json([
                        'status'  => 0,
                        'message' => $validator->errors()
                    ]);
                }
            }
            $worker->status = $request->status;
            $worker->statusRemarks = $request->statusRemarks;
            
            if($request->status==3){
                $user->status = "Approved";
                $user->action = 1;

                $worker->active = 1;
                $worker->status = 3;
                $worker->statusDate = Carbon::now();
                $worker->statusDoneBy = session('user')['UserId']??Null;
            }
            if($request->status==4){
                $user->status = "Hold";
                $user->action = 0;

                $worker->status = 4;
                $worker->active = 0;
                $worker->statusDate =null;
                $worker->statusDoneBy = null;
            }
            $user->save();  
            $worker->save();
            return response()->json([
                'status'       => 1,
                'message'      => 'Status Updated Successfully'
            ]);

            
        } else {
            return response()->json([
                'status'  => 0,
                'message' => 'something went wrong',
            ]);
        }
    }

    public function viewWorker($id)
    {
        if (session()->missing('user') )
            return redirect(url('/'));

        $companies = Company::select('Company_ID', 'Company_Name')->get();
        $branches = Branch::select('Branch_ID', 'BranchName', 'Company_ID')->get();
        $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
        $labourClassification = Contractor_Category::select('Category_ID', 'Category_Name')->get();
        // $mesthiries = Mesthiry::select('id','name')->get();
        $mesthiries[] = ['id' => 1, 'name' => 'testMesthiry'];
        // $workunits = Workunit::select('id','name')->get();
        $workunits[] = ['id' => 1, 'name' => 'testWorkunit'];
        $worker_docs = Worker::with('company', 'branch', 'contractor', 'docs')->whereId($id)->get();
        if ($worker_docs) {
            return view('workers/worker-view', compact('companies', 'branches', 'contractors', 'mesthiries', 'workunits', 'worker_docs','labourClassification'));
        } else {
            return back()->withErrors("Something went wrong");
        }
    }
    public function addDocs(Request $request)
    {
        $worker_docs = new WorkersDocs();
        $validator = Validator::make($request->all(), [
            'documents'            => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status'  => 0,
                'message' => $validator->errors(),
            ]);
        }
        if (!empty($request->documents)) {
            $id = $request->worker_id;
            foreach ($request->documents as $document) {
                $worker_docs = new WorkersDocs();

                $docName = $id . '-' . time() . '-' . str_replace(' ', '-', $document->getClientOriginalName());
                $worker_docs->doc_name = $id . '-' . time() . '-' . str_replace(' ', '-', $document->getClientOriginalName());
                if (in_array($document->extension(), ['doc', 'docx', 'pdf', 'png', 'jpeg', 'xlsx', 'txt']))
                    $worker_docs->doc_type = 'Document';
                if (in_array($document->extension(), ['mp3', 'm4a', 'wav']))
                    $worker_docs->doc_type = 'Audio';
                if (in_array($document->extension(), ['mp4', 'wma', 'avi']))
                    $worker_docs->doc_type = 'Video';
                $worker_docs->workerId = $id;
                $document->move(public_path('upload/worker/'), $docName);

                $worker_docs->doc_location = 'upload/worker/' . $docName;
                $worker_docs->save();
            }
        }


        return back()->with('message', 'Document Added Successfully');
    }
    public function documentDelete(Request $request)
    {
        $worker_docs = WorkersDocs::find($request->docid);
        if ($worker_docs) {
            if (file_exists(public_path($worker_docs->doc_location))) {
                unlink(public_path($worker_docs->doc_location));
            }
            $worker_docs->delete();

            return back()->with('message', 'Document Deleted Successfully');
        } else {
            return back()->withErrors("Something went wrong while deleting Document");
        }
    }
    public function docsWorker($id)
    {
        $worker = Worker::find($id);
        if ($worker) {
            return view('workers/worker-doc-form', compact('worker'));
        } else {
            return back()->withErrors("Something went wrong");
        }
    }
    public function worker_attendance(){

        if (session()->missing('worker') )
            return redirect(url('worker-login'));
        $attendance = Worker_attendance::select('*')->where(['userid'=>session('worker')['user_id'],'date'=>date('Y-m-d')])->get();
        $user = Ceetee_usercreation::find(session('worker')['user_id']);
        $worker = Worker::find(session('worker')['worker_id']);
        //print_r($worker);exit;
        $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
        $worktypes = Contractor_Category::select('Category_ID', 'Category_Name')->get();
        $units = Booking_Details::select('Booking_ID', 'Product_Villa')->get();
        
       
        
        return view('workers/attendance', compact('attendance','user','worker','contractors','worktypes','units'));
    }
    public function all_worker_attendance(){
        if (session()->missing('user') )
            return redirect(url('/'));
        $attendance = Worker_attendance::with('user')->select('*')->where('status',1)->where('logout_time','!=',null)->get();
        
        $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
        $worktypes = Contractor_Category::select('Category_ID', 'Category_Name')->get();
        $units = Booking_Details::select('Booking_ID', 'Product_Villa')->get();
        
        return view('workers/approve_attendance', compact('attendance','contractors','worktypes','units'));
        
    }
    public function view_attendance($id){
        if (session()->missing('user') )
            return redirect(url('/'));

        if(session('user')){
            $attendance = Worker_attendance::with('user','worker')->select('*')->where(['id'=>$id])->get();
        
            $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
            $worktypes = Contractor_Category::select('Category_ID', 'Category_Name')->get();
            $units = Booking_Details::select('Booking_ID', 'Product_Villa')->get();
            // print_r($attendance);exit;
            return view('workers/view_attendance', compact('attendance','contractors','worktypes','units'));
            
        }
    }
    public function update_attendance(Request $request){
        if (session()->missing('worker') )
            return redirect(url('worker-login'));
        date_default_timezone_set('Asia/Kolkata');

            $attendance = new Worker_attendance();
            $message = "Attendance added successfully";
            if ($request->record_id) {
                $attendance = Worker_attendance::find($request->record_id);
                $message = "Attendance updated successfully";
            }
            $validator = Validator::make($request->all(), [
                'work_type'       => 'required',
                'unit'            => 'required',
                'contractor_id'   => 'required',
                'reg_contractor'  => 'required',
                'expected_working_hours'=>'required',
               
            ]);
    
            
            if ($validator->fails()) {
    
                return response()->json([
                    'status'  => 0,
                    'message' => $validator->errors()
                ]);
            }
    
            $attendance->date = date('Y-m-d');
            $attendance->contractor_id = $request->contractor_id;
            $attendance->work_type = $request->work_type;
            $attendance->userid = $request->user_id;
            $attendance->usertype = "Workers";
            $attendance->unit = $request->unit;
            $attendance->reg_contractor = $request->reg_contractor;
            $attendance->expected_working_hours = $request->expected_working_hours;
            if(!isset($request->record_id)){
                $attendance->login_time = date('Y-m-d H:i');
                $attendance->expected_logout_time = date('Y-m-d H:i',strtotime('+ '.$attendance->expected_working_hours.' Hours'));
                $attendance->latitude = $request->latitude;
                $attendance->longitude = $request->longitude;
            }
            $attendance->status = 1;
            if(isset($request->logout_time))
                $attendance->logout_time = date('Y-m-d H:i');
            $attendance->save();
    
    
    
            return response()->json([
                'status'       => 1,
                'message'      => $message
            ]);
    }
    public function approve_attendance(Request $request){
        if (session()->missing('worker') )
            return redirect(url('worker-login'));
        date_default_timezone_set('Asia/Kolkata');

          
            if ($request->record_id) {
                $attendance = Worker_attendance::find($request->record_id);
                $message = "Attendance Updated successfully";
            }
            $validator = Validator::make($request->all(), [
                'work_type'       => 'required',
                'unit'            => 'required',
                'contractor_id'   => 'required',
                'reg_contractor'  => 'required',
                'expected_working_hours'=>'required',
                'status'=>'required',
                'login_time'=>'required',
                'logout_time'=>'required',

            ]);
    
            
            if ($validator->fails()) {
    
                return response()->json([
                    'status'  => 0,
                    'message' => $validator->errors()
                ]);
            }
    
            $attendance->contractor_id = $request->contractor_id;
            $attendance->work_type = $request->work_type;
            $attendance->userid = $request->user_id;
            $attendance->usertype = "Workers";
            $attendance->unit = $request->unit;
            $attendance->reg_contractor = $request->reg_contractor;
            $attendance->expected_working_hours = $request->expected_working_hours;

                $attendance->login_time = date('Y-m-d H:i',strtotime($request->login_time));
                $attendance->expected_logout_time = date('Y-m-d H:i',strtotime($attendance->login_time.' + '.$attendance->expected_working_hours.' Hours'));
                $attendance->latitude = $request->latitude;
                $attendance->longitude = $request->longitude;
            
            if($request->status==2){
                $validator = Validator::make($request->all(), [
                    'statusRemarks'  => 'required',
                ]);
                if ($validator->fails()) {
        
                    return response()->json([
                        'status'  => 0,
                        'message' => $validator->errors()
                    ]);
                }
            }
            $attendance->status = $request->status;
            $attendance->statusRemarks = $request->statusRemarks;
            $attendance->statusDate = date('Y-m-d');
            $attendance->statusBy = session('user')['UserId'];
            $attendance->logout_time = date('Y-m-d H:i',strtotime( $request->logout_time));
            $attendance->save();
    
    
    
            return response()->json([
                'status'       => 1,
                'message'      => $message
            ]);
    }
    public function attendance_report_worker(Request $request) {
        $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
        $users = Ceetee_usercreation::select('id', 'username')->get();
        $units = Booking_Details::select('Booking_ID', 'Product_Villa')->get();
        $attendance=[];$data=[];
        if($request->isMethod('post')){
            $where=[];$data=['from'=>$request->from,'to'=>$request->to];
            if($request->contractor_id!=''){
                $where['contractor_id']=$request->contractor_id;
                $data['contractor_id']=$request->contractor_id;
            }
            if($request->userid!=''){
                $where['userid']=$request->userid;
                $data['userid']=$request->userid;
            }
                
            if($request->status!=''){
                $where['status']=$request->status;
                $data['status']=$request->status;
            }
                
            if($request->unit!=''){
                $where['unit']=$request->unit;
                $data['unit']=$request->unit;
            }
            $attendance=Worker_attendance::with('user','worker','contractor','units','work_types')->select('*')->where('date','>=',date('Y-m-d',strtotime($request->from)))->where('date','<=',date('Y-m-d',strtotime($request->to)))
            ->where('status','!=',1)->where($where)->get();

        }
        return view('workers/attendance_reports_worker', compact('attendance','data','contractors','units','users'));
    }
    public function attendance_report(Request $request) {
        $contractors = ContractorMaster::select('id', 'Contractor_Name')->get();
        $users = Ceetee_usercreation::select('id', 'username')->get();
        $units = Booking_Details::select('Booking_ID', 'Product_Villa')->get();
        $attendance=[];$data=[];
        if($request->isMethod('post')){
            $where=['status'=>3];$data=['from'=>$request->from,'to'=>$request->to,'status'=>3];
            $attendance=Worker_attendance::with('user','worker','contractor','units','work_types')->select('*')->where('date','>=',date('Y-m-d',strtotime($request->from)))->where('date','<=',date('Y-m-d',strtotime($request->to)))
            ->where($where)->get();

        }
        return view('workers/attendance_reports', compact('attendance','data','contractors','units','users'));
    }
}
