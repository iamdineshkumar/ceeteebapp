<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chathamkulam | {{ $formType }} Worker </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('customized/customized.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/toastr/toastr.min.css') }}">

</head>

@include('../header')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $formType }} Worker</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Worker Management</li>
                        <li class="breadcrumb-item active">{{ $formType }} Worker</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-body">
            <form id="addeditform" action="{{ url('add-edit-worker') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-info ">
                                Basic Details
                            </div>
                            <div class="card-body">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <input type="hidden" name="worker_id" id="worker_id"
                                            value={{ isset($worker) ? $worker->id : '' }}>
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <select name="company_id" id="company" class="form-control"
                                                onchange="triggerBranch(this.value);" required>
                                                <option value="">Select Company</option>
                                                @foreach ($companies as $company)
                                                    <option
                                                        {{ isset($worker) ? ($company->Company_ID == $worker->company_id ? 'Selected' : '') : '' }}
                                                        value="{{ $company->Company_ID }}">
                                                        {{ $company->Company_Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="branch">Branch</label>
                                            <select name="branch_id" id="branch" class='form-control' required>
                                                @if (isset($worker))
                                                    @foreach ($branches as $branch)
                                                        @if ($branch->Company_ID == $worker->company_id)
                                                            <option
                                                                {{ isset($worker) ? ($branch->Branch_ID == $worker->branch_id ? 'Selected' : '') : '' }}
                                                                value="{{ $branch->Branch_ID }}">
                                                                {{ $branch->BranchName }}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name='name' class="form-control" id="name"
                                                value="{{ isset($worker) ? $worker->name : '' }}"
                                                aria-describedby="emailHelp" placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" name="address" id="address" aria-describedby="address" required>{{ isset($worker) ? $worker->address : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="number" name='mobile' class="form-control" id="mobile"
                                                value="{{ isset($worker) ? $worker->mobile : '' }}"
                                                placeholder="Enter Mobile number" required maxlength="10"
                                                minlength="10" title="Enter Valid Mobile No">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="emailid">Email ID</label>
                                            <input type="email" name='email' class="form-control" id="emailid"
                                                value="{{ isset($worker) ? $worker->email : '' }}"
                                                aria-describedby="emailHelp" placeholder="Enter email" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dob">Date of birth</label>
                                            <input type="date" name='dob' class="form-control" id="dob"
                                                value="{{ isset($worker) ? $worker->dob : '' }}" required
                                                min="1900-01-01" max="{{ date('Y-m-d') }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>

                                            <select name='gender' class="form-control" id='gender' required>
                                                <option value="">Select Gender</option>
                                                <option
                                                    {{ isset($worker) ? ('1' == $worker->gender ? 'Selected' : '') : '' }}
                                                    value="1">Male</option>
                                                <option
                                                    {{ isset($worker) ? ('2' == $worker->gender ? 'Selected' : '') : '' }}
                                                    value="2">Female</option>
                                                <option
                                                    {{ isset($worker) ? ('3' == $worker->gender ? 'Selected' : '') : '' }}
                                                    value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="labour_classification">Labour Classification</label>

                                            <select name='labour_classification' class="form-control"
                                                id='labour_classification' required>
                                                <option value="">Select Type</option>
                                                <option
                                                    {{ isset($worker) ? ('local' == $worker->labour_classification ? 'Selected' : '') : '' }}
                                                    value="local">Local
                                                </option>
                                                <option
                                                    {{ isset($worker) ? ('others' == $worker->labour_classification ? 'Selected' : '') : '' }}
                                                    value="others">Others
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="contarctor">Contractor</label>

                                            <select name='contractor_id' class="form-control" id='contarctor'
                                                required>
                                                <option value="">Select Contractor</option>
                                                @foreach ($contractors as $contractor)
                                                    <option
                                                        {{ isset($worker) ? ($contractor->id == $worker->contractor_id ? 'Selected' : '') : '' }}
                                                        value="{{ $contractor->id }}">
                                                        {{ $contractor->Contractor_Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="mesthiry">Mesthiry</label>
                                            <select name="mesthiry_id" id="mesthiry" class="form-control" required>
                                                <option value="">Select Mesthiry</option>
                                                @foreach ($mesthiries as $mesthiry)
                                                    <option
                                                        {{ isset($worker) ? ($mesthiry['id'] == $worker->mesthiry_id ? 'Selected' : '') : '' }}
                                                        value="{{ $mesthiry['id'] }}">{{ $mesthiry['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="work_unit">Work Unit</label>
                                            <select name="work_unit" id="workunit" class="form-control" required>
                                                <option value="">Select Work Unit</option>
                                                @foreach ($workunits as $workunit)
                                                    <option
                                                        {{ isset($worker) ? ($workunit['id'] == $worker->work_unit ? 'Selected' : '') : '' }}
                                                        value="{{ $workunit['id'] }}">{{ $workunit['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="remarks">Remarks</label>
                                            <textarea class="form-control" name="remarks" id="remarks" aria-describedby="remarks">{{ isset($worker) ? $worker->remarks : '' }}  </textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>


                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-info ">
                                Bank Details
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="id_proof">Id Proof Type</label>

                                            <select name='id_proof_type' class="form-control" id='id_proof'
                                                required>
                                                <option value="">Select Type</option>
                                                <option
                                                    {{ isset($worker) ? ('aadhar' == $worker->id_proof_type ? 'Selected' : '') : '' }}
                                                    value="aadhar">
                                                    Aadhar</option>
                                                <option
                                                    {{ isset($worker) ? ('voterId' == $worker->id_proof_type ? 'Selected' : '') : '' }}
                                                    value="voterId">
                                                    Voter Id
                                                </option>
                                                <option
                                                    {{ isset($worker) ? ('panCard' == $worker->id_proof_type ? 'Selected' : '') : '' }}
                                                    value="panCard">Pan
                                                    Card
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="idpn">Id Proof Number</label>
                                            <input type="text" name='id_proof_number' class="form-control"
                                                value="{{ isset($worker) ? $worker->id_proof_no : '' }}"
                                                id="id_proof_number" placeholder="Enter Id Proof Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="bano">Bank Account Number</label>
                                            <input type="number" name='bank_account_no' class="form-control"
                                                id="bank_account_no"
                                                value="{{ isset($worker) ? $worker->bank_account_no : '' }}"
                                                placeholder="Enter Bank Account Number" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="bahn">Bank Account Holder Name</label>
                                            <input type="text" name='bank_account_holder_name'
                                                class="form-control" id="bank_account_holder_name"
                                                value="{{ isset($worker) ? $worker->bank_account_holder_name : '' }}"
                                                placeholder="Enter Bank Account Holder Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="ifsc">IFSC Code</label>
                                            <input type="text" name='ifsc' id="ifscinput"
                                                pattern="[A-Z]{4}0[A-Z0-9]{6}" title="Enter Valid IFSC"
                                                class="form-control" id="ifsc"
                                                value="{{ isset($worker) ? $worker->ifsc : '' }}"
                                                placeholder="Enter IFSC Code" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="bankname">Bank Name </label>
                                            <input type="text" name='bank_name' class="form-control"
                                                value="{{ isset($worker) ? $worker->bank_name : '' }}" id="bankname"
                                                placeholder="Enter Bank Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="bank_branch_name">Bank Branch Name</label>
                                            <input type="text" name='bank_branch_name' class="form-control"
                                                value="{{ isset($worker) ? $worker->bank_branch_name : '' }}"
                                                id="bank_branch_name" placeholder="Enter Bank Branch Name" required>
                                        </div>
                                    </div>
                                </div>
                                @if (!isset($worker))
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="document">Documents</label>
                                                <input class="form-control" type="file" name="documents[]"
                                                    accept=".doc,.docx,.pdf,.txt,.mp3,.mp4,.png,.jpeg,.xlsx,.m4a,.wav,.wma,.avi,.jpg"
                                                    id="documents" multiple>
                                            </div>
                                        </div>

                                    </div>
                                @endif

                                <br>


                            </div>
                        </div>
                    </div>
                    <input id="submit-hidden" type="submit" style="display: none" />
                </div>
                <button class="btn btn-info btn-sm float-right" type="button" id="formSubmitBtn"><i
                        class="fas fa-save"></i> Submit
                </button>
                <a href="{{ url('workers') }}" class="btn btn-danger btn-sm float-left"> <i
                        class="fas fa-arrow-left"></i>
                    Cancel</a>


            </form>
        </div>
    </div>
</div>


</div>
<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!--<script src="{{ URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>-->
<script src="{{ URL::asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<!-- Toastr -->
<script src="{{ URL::asset('plugins/toastr/toastr.min.js') }}"></script>
<!-- Page specific script -->
<script>
    const ifscInputField = document.getElementById("ifscinput");

    ifscInputField.addEventListener("keyup", function(event) {
        event.preventDefault();
        ifscInputField.value = ifscInputField.value.toUpperCase();
    });
    var branchList = [];
    @foreach ($branches as $branch)
        branchList.push({
            'Branch_ID': '{{ $branch->Branch_ID }}',
            'BranchName': '{{ $branch->BranchName }}',
            'Company_ID': '{{ $branch->Company_ID }}',
        });
    @endforeach


    function triggerBranch(selectedVal) {

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
    $(document).on('click', '#formSubmitBtn', function() {
        if (!$("#addeditform")[0].checkValidity()) {
            $("#addeditform").find("#submit-hidden").click();
            return;
        }


        var formData = new FormData($("#addeditform")[0]);
        var url = $("#addeditform").attr('action');
        $('#formSubmitBtn').prop('disabled', true);
        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: url,
            async: true,
            data: formData,
            success: function(response) {
                if (response.status == 1) {
                    toastr.success(response.message, 'Success');
                    $('#formSubmitBtn').prop('disabled', false);
                    window.location = "{{ url('workers') }}";


                } else {
                    for (let x in response.message) {
                        text = response.message[x];
                        toastr.error(text, 'Error');
                    }

                    $('#formSubmitBtn').prop('disabled', false);
                }
            }
        });
    });
</script>
@if (session()->has('message'))
    <script>
        toastr.success("{{ session()->get('message') }}", 'Success')
    </script>
@endif
@if ($errors->any())
    <script>
        toastr.error('{{ $errors->first }}', 'Error')
    </script>
@endif
@include('../footer')
