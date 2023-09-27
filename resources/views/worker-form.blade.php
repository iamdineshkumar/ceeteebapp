<input type="hidden" name="worker_id" id="worker_id" value={{ isset($worker) ? $worker->id : '' }}>
<div class="form-group">
    <label for="company">Company</label>
    <select name="company_id" id="company" class="form-control" onchange="triggerBranch(this.value);">
        <option value="">Select Company</option>
        @foreach ($companies as $company)
            <option {{ isset($worker) ? ($company->Company_ID == $worker->company_id ? 'Selected' : '') : '' }}
                value="{{ $company->Company_ID }}">{{ $company->Company_Name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="branch">Branch</label>
    <select name="branch_id" id="branch" class='form-control'>
        @if (isset($worker))
            @foreach ($branches as $branch)
                @if ($branch->Company_ID == $worker->company_id)
                    <option {{ isset($worker) ? ($branch->Branch_ID == $worker->branch_id ? 'Selected' : '') : '' }}
                        value="{{ $branch->Branch_ID }}">{{ $branch->BranchName }}</option>
                @endif
            @endforeach
        @endif
    </select>
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name='name' class="form-control" id="name"
        value="{{ isset($worker) ? $worker->name : '' }}" aria-describedby="emailHelp" placeholder="Enter Name">
</div>
<div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" id="address" aria-describedby="address">{{ isset($worker) ? $worker->address : '' }}</textarea>
</div>

<div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="number" name='mobile' class="form-control" id="mobile"
        value="{{ isset($worker) ? $worker->mobile : '' }}" placeholder="Enter Mobile number">
</div>
<div class="form-group">
    <label for="emailid">Email ID</label>
    <input type="email" name='email' class="form-control" id="emailid"
        value="{{ isset($worker) ? $worker->email : '' }}" aria-describedby="emailHelp" placeholder="Enter email">

</div>
<div class="form-group">
    <label for="dob">Date of birth</label>
    <input type="date" name='dob' class="form-control" id="dob"
        value="{{ isset($worker) ? $worker->dob : '' }}">
</div>
<div class="form-group">
    <label for="gender">Gender</label>

    <select name='gender' class="form-control" id='gender'>
        <option value="">Select Gender</option>
        <option {{ isset($worker) ? ('1' == $worker->gender ? 'Selected' : '') : '' }} value="1">Male</option>
        <option {{ isset($worker) ? ('2' == $worker->gender ? 'Selected' : '') : '' }} value="2">Female</option>
        <option {{ isset($worker) ? ('3' == $worker->gender ? 'Selected' : '') : '' }} value="3">Other</option>
    </select>
</div>

<div class="form-group">
    <label for="id_proof">Id Proof Type</label>

    <select name='id_proof_type' class="form-control" id='id_proof'>
        <option value="">Select Type</option>
        <option {{ isset($worker) ? ('aadhar' == $worker->id_proof_type ? 'Selected' : '') : '' }} value="aadhar">
            Aadhar</option>
        <option {{ isset($worker) ? ('voterId' == $worker->id_proof_type ? 'Selected' : '') : '' }} value="voterId">
            Voter Id
        </option>
        <option {{ isset($worker) ? ('panCard' == $worker->id_proof_type ? 'Selected' : '') : '' }} value="panCard">Pan
            Card
        </option>
    </select>
</div>
<div class="form-group">
    <label for="idpn">Id Proof Number</label>
    <input type="text" name='id_proof_number' class="form-control"
        value="{{ isset($worker) ? $worker->id_proof_no : '' }}" id="id_proof_number"
        placeholder="Enter Id Proof Number">
</div>
<div class="form-group">
    <label for="labour_classification">Labour Classification</label>

    <select name='labour_classification' class="form-control" id='labour_classification'>
        <option value="">Select Type</option>
        <option {{ isset($worker) ? ('local' == $worker->labour_classification ? 'Selected' : '') : '' }}
            value="local">Local
        </option>
        <option {{ isset($worker) ? ('others' == $worker->labour_classification ? 'Selected' : '') : '' }}
            value="others">Others
        </option>
    </select>
</div>
<div class="form-group">
    <label for="bano">Bank Account Number</label>
    <input type="text" name='bank_account_no' class="form-control" id="bank_account_no"
        value="{{ isset($worker) ? $worker->bank_account_no : '' }}" placeholder="Enter Bank Account Number">
</div>
<div class="form-group">
    <label for="bahn">Bank Account Holder Name</label>
    <input type="text" name='bank_account_holder_name' class="form-control" id="bank_account_holder_name"
        value="{{ isset($worker) ? $worker->bank_account_holder_name : '' }}"
        placeholder="Enter Bank Account Holder Name">
</div>
<div class="form-group">
    <label for="ifsc">IFSC Code</label>
    <input type="text" name='ifsc' class="form-control" id="ifsc"
        value="{{ isset($worker) ? $worker->ifsc : '' }}" placeholder="Enter IFSC Code">
</div>
<div class="form-group">
    <label for="bankname">Bank Name </label>
    <input type="text" name='bank_name' class="form-control"
        value="{{ isset($worker) ? $worker->bank_name : '' }}" id="bankname" placeholder="Enter Bank Name">
</div>
<div class="form-group">
    <label for="bank_branch_name">Bank Branch Name</label>
    <input type="text" name='bank_branch_name' class="form-control"
        value="{{ isset($worker) ? $worker->bank_branch_name : '' }}" id="bank_branch_name"
        placeholder="Enter Bank Branch Name">
</div>
<div class="form-group">
    <label for="contarctor">Contractor</label>

    <select name='contractor_id' class="form-control" id='contarctor'>
        <option value="">Select Contractor</option>
        @foreach ($contractors as $contractor)
            <option {{ isset($worker) ? ($contractor->id == $worker->contractor_id ? 'Selected' : '') : '' }}
                value="{{ $contractor->id }}">{{ $contractor->Contractor_Name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="mesthiry">Mesthiry</label>
    <select name="mesthiry_id" id="mesthiry" class="form-control">
        <option value="">Select Mesthiry</option>
        @foreach ($mesthiries as $mesthiry)
            <option {{ isset($worker) ? ($mesthiry['id'] == $worker->mesthiry_id ? 'Selected' : '') : '' }}
                value="{{ $mesthiry['id'] }}">{{ $mesthiry['name'] }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="work_unit">Work Unit</label>
    <select name="work_unit" id="workunit" class="form-control">
        <option value="">Select Work Unit</option>
        @foreach ($workunits as $workunit)
            <option {{ isset($worker) ? ($workunit['id'] == $worker->work_unit ? 'Selected' : '') : '' }}
                value="{{ $workunit['id'] }}">{{ $workunit['name'] }}</option>
        @endforeach
    </select>

</div>
<div class="form-group">
    <label for="remarks">Remarks</label>
    <textarea class="form-control" name="remarks" id="remarks" aria-describedby="remarks">{{ isset($worker) ? $worker->remarks : '' }}  </textarea>
</div>

<script>
    $("#commonModalForm").attr('action', '{{ url('add-edit-worker') }}');

    var branchList = [];
    @foreach ($branches as $branch)
        branchList.push({
            'Branch_ID': '{{ $branch->Branch_ID }}',
            'BranchName': '{{ $branch->BranchName }}',
            'Company_ID': '{{ $branch->Company_ID }}',
        });
    @endforeach


    function triggerBranch(selectedVal) {
        console.log(branchList);
        var caste = $('#branch');
        caste.empty();
        var options = "";
        $.each(branchList, function(index, value) {
            if (selectedVal == value.Company_ID) {
                options += '<option  value="' + value.Branch_ID + '">' + value.BranchName + '</option>';
            }
        });
        caste.html(options);
    }
</script>
