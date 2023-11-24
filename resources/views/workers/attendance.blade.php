<?php
date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Worker | Attendance </title>

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

@include('workers/header')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Worker Attendance</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item active"> Worker Attendance</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-body">
            <form id="attendanceform" action="{{ url('update-attendance') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name='record_id' class="form-control" id="record_id"
                                                value='{{isset($attendance[0]->id)?$attendance[0]->id:''}}'>
                                   <input type="hidden" name='user_id' class="form-control" id="user_id"
                                                value="{{$user->id}}">
                                   
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="work_type">Work Type</label>
                                            <select name="work_type" id="work_type" class="form-control"
                                                required>
                                                <option value="">Select Work Type</option>
                                                @foreach ($worktypes as $worktype)
                                                    <option
                                                        {{ isset($attendance[0]->work_type)? ($attendance[0]->work_type == $worktype->Category_ID ? 'Selected' : ''): (isset($worker) ? ($worktype->Category_ID == $worker->labour_classification ? 'Selected' : '') : '') }}
                                                        value="{{ $worktype->Category_ID }}">
                                                        {{ $worktype->Category_Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="unit">Units</label>
                                            <select name="unit" id="unit" class="form-control"
                                                 required>
                                                <option value="">Select Unit</option>
                                                @foreach ($units as $unit)
                                                    @if($unit->Product_Villa!='')
                                                    <option
                                                    {{ isset($attendance[0]->unit)? ($attendance[0]->unit == $unit->Booking_ID ? 'Selected' : ''):  '' }}
                                                        value="{{ $unit->Booking_ID }}">
                                                        {{ $unit->Product_Villa }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="contarctor">Contractor</label>
                    
                                            <select  name='contractor_id' class="form-control" id='contarctor'
                                                required>
                                                <option value="">Select Contractor</option>
                                                @foreach ($contractors as $contractor)
                                                    <option
                                                    {{ isset($attendance[0]->contractor_id)? ($attendance[0]->contractor_id == $contractor->id ? 'Selected' : ''):  '' }}
                                                        value="{{ $contractor->id }}">
                                                        {{ $contractor->Contractor_Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                       
                                            <input type="hidden" name='reg_contractor' class="form-control" id="reg_contractor"
                                                value="{{$worker->contractor_id}}">
                                     @if(isset($attendance[0]->login_time))
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="login_time">Log In Time </label>
                                            <input type="text" name='login_time' class="form-control" id="login_time"
                                                value="{{isset($attendance[0]->login_time) ? date('d-m-Y h:i A',strtotime($attendance[0]->login_time)) : date('H:i')}}" required readonly>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="expected_working_hours">Expecting Working Hours </label>
                                            <input type="number" name='expected_working_hours' class="form-control" id="expected_working_hours"
                                                value="{{isset($attendance[0]->expected_working_hours) ? $attendance[0]->expected_working_hours : ''}}" required max="13" {{isset($attendance[0]->expected_working_hours) ? 'readonly' : ''}}>
                                        </div>
                                    </div>
                                    
                                    @if (isset($attendance[0]->logout_time))
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="logout_time"> Log Out Time </label>
                                            <input type="text" name='' class="form-control" id=""
                                                value="{{isset($attendance[0]->logout_time) ? date('d-m-Y h:i A',strtotime($attendance[0]->logout_time))  : date('H:i')}}"  readonly>
                                        </div>
                                    </div>
                                    @endif
                                    
                                    <input type="hidden" name='logout_time' class="form-control" id="logout_time"
                                                value="">
                                    <input type="hidden" name='latitude' class="form-control" id="latitude"
                                                value="">
                                    <input type="hidden" name='longitude' class="form-control" id="longitude"
                                                value="" >
                                    
                                    

                                </div>
                                <br>


                            </div>
                       
                    <input id="submit-hidden" type="submit" style="display: none" />
                </div>
                @if (!isset($attendance[0]->logout_time))
                <input id="formSubmitBtn" type="submit" style="display: none" />
                <button class="{{isset($attendance[0])?'btn btn-danger btn-sm float-right':'btn btn-info btn-sm float-right'}}" type="button" onclick="confirmation('{{(!isset($attendance[0])?'Login':'Logout')}}')"> 
                    <i class="fas fa-sign-in-alt"></i> {{isset($attendance[0])?'Logout':'Login'}}
            </button>
            @endif
                @if(isset($attendance[0]) && $attendance[0]->status==1)
                <input id="formSaveBtn" type="submit" style="display: none" />
                <button class="btn btn-info btn-sm float-right " type="button"  onclick="confirmation('Save')"><i
                    class="fas fa-save"></i> Update
                </button>
            @endif
    
            </form>
        </div>
        <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="ConfirmModel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ConfirmModel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="confirmMsg">Are you sure you want to Update the form?</p>
                        <input type="hidden" name="btnid" id="btnid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="confirmSubmit">Yes</button>
                    </div>
                </div>
            </div>
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
<script src="{{ URL::asset('dist/js/geolocation.min.js') }}"></script>


<script>
     function confirmation(id) {
        if (!$("#attendanceform")[0].checkValidity()) {
            $("#attendanceform").find("#submit-hidden").click();
            return;
        }
        
        if(id=='Login'){
            getLocation();
            document.getElementById('btnid').value = 'save';
            $('#confirmMsg').text('Are You sure to Login?')
        }
        else if(id=='Logout'){
            document.getElementById('btnid').value = 'submit';
            $('#confirmMsg').text('Are You sure  to Logout?')
        }
        else{
            document.getElementById('btnid').value = 'save';
            $('#confirmMsg').text('Are you sure  to update the form?')
        }
        $('#confirmationModal').modal('show');
    }
    $('#confirmSubmit').click(function () {
        var btnid=document.getElementById('btnid').value;
        if(btnid=='save'){
            saveform();
        }
        else if(btnid=='submit')
            submitform();

    });
    function saveform() {
    
        document.getElementById('logout_time').value = '';


        var formData = new FormData($("#attendanceform")[0]);
        var url = $("#attendanceform").attr('action');
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
                    $('#formSaveBtn').prop('disabled', false);
                    location.reload();


                } else {
                    for (let x in response.message) {
                        text = response.message[x];
                        toastr.error(text, 'Error');
                    }

                    $('#formSaveBtn').prop('disabled', false);
                }
            }
        });
    }
    function submitform() {
        document.getElementById('logout_time').value = true;
        var formData = new FormData($("#attendanceform")[0]);
        var url = $("#attendanceform").attr('action');
        //$('#formSubmitBtn').prop('disabled', true);
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
                    location.reload();


                } else {
                    for (let x in response.message) {
                        text = response.message[x];
                        toastr.error(text, 'Error');
                    }

                    $('#formSubmitBtn').prop('disabled', false);
                }
            }
        });
    }
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
@include('workers/footer')
