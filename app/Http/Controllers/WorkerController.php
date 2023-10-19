<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Company;
use Illuminate\Http\Request;
use Validator;
use App\Models\ContractorMaster;
use App\Models\Contractor_Category;
use App\Models\Worker;
use App\Models\WorkersDocs;

class WorkerController extends Controller
{


    public function workerList()
    {
        $workers = Worker::with('company', 'branch', 'contractor','labour')->get();
        // print_r($workers);
        // exit;
        return view('workers/workers-list', compact('workers'));
    }

    public function addWorker()
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
        return view('workers/worker-form', compact('formType', 'companies', 'branches', 'contractors', 'mesthiries', 'workunits','labourClassification'));
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
            'mobile'         => 'required|digits:10',
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
            'work_unit'          => 'required'
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

    public function viewWorker($id)
    {
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
}
