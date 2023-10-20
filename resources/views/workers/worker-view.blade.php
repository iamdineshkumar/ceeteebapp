<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chathamkulam | View Worker </title>

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
                    <h1>View Worker</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Worker Management</li>
                        <li class="breadcrumb-item active">View Worker</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="company">Company</label>
                        <select name="company_id" id="company" class="form-control" required disabled>

                            <option value="{{ $worker_docs[0]->company->Company_Name }}">
                                {{ $worker_docs[0]->company->Company_Name }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="branch">Branch</label>
                        <select name="branch_id" id="branch" class='form-control' required disabled>
                            <option value="{{ $worker_docs[0]->branch->BranchName }}">
                                {{ $worker_docs[0]->branch->BranchName }}</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name='name' class="form-control" id="name"
                            value="{{ $worker_docs[0]->name }}" aria-describedby="emailHelp" placeholder="Enter Name"
                            required disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" aria-describedby="address" required disabled>{{ $worker_docs[0]->address }}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="number" name='mobile' class="form-control" id="mobile"
                            value="{{ $worker_docs[0]->mobile }}" placeholder="Enter Mobile number" required disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="emailid">Email ID</label>
                        <input type="email" name='email' class="form-control" id="emailid"
                            value="{{ $worker_docs[0]->email }}" aria-describedby="emailHelp" placeholder="Enter email"
                            required disabled>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="dob">Date of birth</label>
                        <input type="date" name='dob' class="form-control" id="dob"
                            value="{{ $worker_docs[0]->dob }}" required disabled min="1900-01-01" max="2023-10-03">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name='gender' class="form-control" id='gender' required disabled>
                            <option {{ $worker_docs[0]->gender == '1' ? 'Selected' : '' }} value="1">Male
                            </option>
                            <option {{ $worker_docs[0]->gender == '2' ? 'Selected' : '' }} value="2">Female
                            </option>
                            <option {{ $worker_docs[0]->gender == '3' ? 'Selected' : '' }} value="3">Other
                            </option>
                        </select>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="id_proof">Id Proof Type</label>
                        <select name='id_proof_type' class="form-control" id='id_proof' required disabled>
                            <option value="aadhar" {{ $worker_docs[0]->id_proof_type == 'aadhar' ? 'Selected' : '' }}>
                                Aadhar</option>
                            <option {{ $worker_docs[0]->id_proof_type == 'voterId' ? 'Selected' : '' }}
                                value="voterId">
                                Voter Id
                            </option>
                            <option {{ $worker_docs[0]->id_proof_type == 'panCard' ? 'Selected' : '' }}
                                value="panCard">Pan
                                Card
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="idpn">Id Proof Number</label>
                        <input type="text" name='id_proof_number' class="form-control"
                            value="{{ $worker_docs[0]->id_proof_no }}" id="id_proof_number"
                            placeholder="Enter Id Proof Number" required disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="labour_classification">Labour Classification</label>

                        <select name="labour_classification" id="labour_classification" class='form-control' required disabled>
                            <option value="{{ $worker_docs[0]->labour->Category_Name }}">
                                {{ $worker_docs[0]->labour->Category_Name }}</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="bano">Bank Account Number</label>
                        <input type="text" name='bank_account_no' class="form-control" id="bank_account_no"
                            value="{{ $worker_docs[0]->bank_account_no }}" placeholder="Enter Bank Account Number"
                            required disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="bahn">Bank Account Holder Name</label>
                        <input type="text" name='bank_account_holder_name' class="form-control"
                            id="bank_account_holder_name" value="{{ $worker_docs[0]->bank_account_holder_name }}"
                            placeholder="Enter Bank Account Holder Name" required disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ifsc">IFSC Code</label>
                        <input type="text" name='ifsc' class="form-control" id="ifsc"
                            value="{{ $worker_docs[0]->ifsc }}" placeholder="Enter IFSC Code" required disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="bankname">Bank Name </label>
                        <input type="text" name='bank_name' class="form-control"
                            value="{{ $worker_docs[0]->bank_name }}" id="bankname" placeholder="Enter Bank Name"
                            required disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="bank_branch_name">Bank Branch Name</label>
                        <input type="text" name='bank_branch_name' class="form-control"
                            value="{{ $worker_docs[0]->bank_branch_name }}" id="bank_branch_name"
                            placeholder="Enter Bank Branch Name" required disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="contarctor">Contractor</label>

                        <select name='contractor_id' class="form-control" id='contarctor' required disabled>

                            <option value="">
                                {{ $worker_docs[0]->contractor->Contractor_Name }}</option>

                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mesthiry">Mesthiry</label>
                        <select name="mesthiry_id" id="mesthiry" class="form-control" required disabled>
                            @foreach ($mesthiries as $mesthiry)
                                <option
                                    {{ isset($worker) ? ($mesthiry['id'] == $worker_docs[0]->mesthiry_id ? 'Selected' : '') : '' }}
                                    value="{{ $mesthiry['id'] }}">{{ $mesthiry['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="work_unit">Work Unit</label>
                        <select name="work_unit" id="workunit" class="form-control" required disabled>
                            @foreach ($workunits as $workunit)
                                <option
                                    {{ isset($worker) ? ($workunit['id'] == $worker_docs[0]->work_unit ? 'Selected' : '') : '' }}
                                    value="{{ $workunit['id'] }}">{{ $workunit['name'] }}</option>
                            @endforeach
                        </select>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <textarea class="form-control" name="remarks" id="remarks" aria-describedby="remarks" disabled>{{ $worker_docs[0]->remarks }}   </textarea>
                    </div>
                </div>

            </div>
            <h2>Documents </h2>
            <form action="{{ url('add-docs') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='worker_id' value="{{ $worker_docs[0]->id }}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="file" name="documents[]" id="documents" required
                                accept=".doc,.docx,.pdf,.txt,.mp3,.mp4,.png,.jpeg,.xlsx,.m4a,.wav,.wma,.avi,.jpg"
                                multiple>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button class="btn btn-info btn-sm float-left" type="submit">Save </button>
                        </div>
                    </div>

                </div>

            </form>


            <div id="docslist">

                <br> <br>
                <table id="docsTable" class="table table-bordered table-responsive"
                    style="margin-left: auto; 
            margin-right: auto; width: 80%;">
                    <thead>
                        <tr>
                            <th style="width:10%">Date</th>
                            <th style="width:10%">File</th>
                            <th style="width:10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($worker_docs[0]->docs as $doc)
                            <tr>
                                <td>{{ date('d-m-Y', strtotime($doc->date)) }}</td>
                                <td>{{ $doc->doc_name }}</td>
                                <td>
                                    <a href="{{ asset($doc->doc_location) }}" class="btn btn-info btn-sm" download><i
                                            class="fas fa-download"></i></a>
                                    <a href="{{ asset($doc->doc_location) }}" target="_blank"
                                        class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>

                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="deleteDocument({{ $doc->id }})"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <br>
            <a href="{{ url('workers') }}" class="btn btn-danger btn-sm float-left"> <i
                    class="fas fa-arrow-left"></i>
                Back</a>
        </div>

    </div>
</div>
<div class="modal fade" id="modal-document-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Document</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ url('document-delete') }}" id="docdeleteform">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group delete-form-group">
                            <input type="hidden" name="docid">
                            <label>Are you sure?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn_delete" name="docdeletebtn">Delete</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
    function deleteDocument(id) {
        // console.log(id);
        $("[name='docid']").val(id);
        $('#modal-document-delete').modal('show');
    }

    function editDocument(docId) {
        var type = "Document";
        var caste = $('#commonModalContent');
        caste.empty();
        $.ajax({
            url: "{{ url('edit-document') }}/" + docId,
            type: 'GET',
            success: function(response) {
                caste.html(response);
                $('#commonModalLabel').text("Edit " + type);
                $('#commonModal').modal('show');
            }
        })
    }
    $(document).ready(function() {
        $("#docsTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
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
