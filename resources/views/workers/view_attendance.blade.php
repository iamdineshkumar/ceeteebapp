
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

@include('header')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> View Attendance</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item active"> View Attendance</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-body">
            <form id="attendanceform" action="{{ url('approve-attendance') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <?php $attendance=$attendance[0];?>
                    <div class="col-md-12">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name='record_id' class="form-control" id="record_id"
                                                value='{{isset($attendance->id)?$attendance->id:''}}'>
                                   <input type="hidden" name='user_id' class="form-control" id="user_id"
                                                value="{{$attendance->user->id}}">
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="work_type">Work Type</label>
                                            <select name="work_type" id="work_type" class="form-control"
                                                required>
                                                <option value="">Select Work Type</option>
                                                @foreach ($worktypes as $worktype)
                                                    <option
                                                        {{ isset($attendance->work_type)? ($attendance->work_type == $worktype->Category_ID ? 'Selected' : ''): (isset($worker) ? ($worktype->Category_ID == $worker->labour_classification ? 'Selected' : '') : '') }}
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
                                                    {{ isset($attendance->unit)? ($attendance->unit == $unit->Booking_ID ? 'Selected' : ''):  '' }}
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
                                                    {{ isset($attendance->contractor_id)? ($attendance->contractor_id == $contractor->id ? 'Selected' : ''):  '' }}
                                                        value="{{ $contractor->id }}">
                                                        {{ $contractor->Contractor_Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="contarctor">Reg - Contractor</label>
                                            
                                            <select  name='' class="form-control" id=''
                                                required disabled>
                                                <option value="">Select Contractor</option>
                                                @foreach ($contractors as $contractor)
                                                    <option
                                                        {{$contractor->id==$attendance->worker->contractor_id?'Selected':'' }} 
                                                        value="{{ $contractor->id }}">
                                                        {{ $contractor->Contractor_Name }}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name='reg_contractor' class="form-control" id="reg_contractor"
                                                value="{{$attendance->worker->contractor_id}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="login_time">Log In Time </label>
                                            <input type="datetime-local" name='login_time' class="form-control" id="login_time"
                                                value="{{isset($attendance->login_time) ? date('Y-m-d H:i',strtotime($attendance->login_time)) : date('Y-m-d H:i')}}" required >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="expected_working_hours">Expecting Working Hours </label>
                                            <input type="number" name='expected_working_hours' class="form-control" id="expected_working_hours"
                                                value="{{isset($attendance->expected_working_hours) ? $attendance->expected_working_hours : ''}}" required max="24" step="2" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="expected_logout_time">Expected Log Out Time </label>
                                            <input type="datetime-local" name='expected_logout_time' class="form-control" id="expected_logout_time"
                                            value="{{isset($attendance->expected_logout_time) ? date('Y-m-d H:i',strtotime($attendance->expected_logout_time)) : ''}}" required readonly>
                                        </div>
                                    </div>
                                    @if (isset($attendance->login_time))
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="logout_time"> Log Out Time </label>
                                            <input type="datetime-local" name='logout_time' class="form-control" id="logout_time"
                                                value="{{isset($attendance->logout_time) ? date('Y-m-d H:i',strtotime($attendance->logout_time)) : date('Y-m-d H:i')}}" required >
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="id_proof">Status</label>
                                        
                                            <select name='status' class="form-control" id='status' required>
                                                <option value="">Select Type</option>
                                                <option {{ isset($attendance) ? (1 == $attendance->status ? 'Selected' : '') : '' }} value=1>
                                                    Open</option>
                                                <option {{ isset($attendance) ? (2 == $attendance->status ? 'Selected' : '') : '' }} value=2>
                                                    Cancelled
                                                </option>
                                                <option {{ isset($attendance) ? (3 == $attendance->status ? 'Selected' : '') : '' }} value=3>
                                                    Approved
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="remarks">Status Remarks</label>
                                            <textarea class="form-control" name="statusRemarks" id="statusRemarks" aria-describedby="statusRemarks">{{ isset($attendance) ? $attendance->statusRemarks : '' }}  </textarea>
                                        </div>
                                    </div> 
                                    <input type="hidden" name='latitude' class="form-control" id="latitude"
                                                value="">
                                    <input type="hidden" name='longitude' class="form-control" id="longitude"
                                                value="" >
                                    
                                    

                                </div>
                                <br>


                            </div>
                       
                    <input id="submit-hidden" type="submit" style="display: none" />
                </div>
              
                
                @if(isset($attendance))
                <a href="{{url('worker-attendance')}}" class="btn btn-danger btn-sm float-left " type="button" ><i
                    class="fas fa-arrow-left"></i> Cancel
                </a>
                <input id="formSaveBtn" type="submit" style="display: none" />
                <button class="btn btn-info btn-sm float-right " type="button"  onclick="confirmation()"><i
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
                        <p>Are you sure to Change Status  to Approved/Cancelled ? Once Saved it's Non Editable.</p>
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


<script>
    
    function confirmation() {
        status=document.getElementById('status').value;
        if(status!='' && status!=1 )
            $('#confirmationModal').modal('show');
        else
            saveform();
        
    }
    $('#confirmSubmit').click(function () {
        saveform();
    });
$("#expected_working_hours").on("keyup", function(){  
        const hoursToAddInput = document.getElementById('expected_working_hours');
            
            const hoursToAdd = parseInt(hoursToAddInput.value);
            const datetimeInput = document.getElementById('expected_logout_time');
            if (!isNaN(hoursToAdd)) {
                const cdatetimeInput = document.getElementById('login_time');
                const currentDatetimeValue = cdatetimeInput.value;
                console.log(currentDatetimeValue);
                const currentDatetime = new Date(currentDatetimeValue);
                currentDatetime.setHours(currentDatetime.getHours() + hoursToAdd);
                console.log(currentDatetime);
                const year = currentDatetime.getFullYear();
                const month = String(currentDatetime.getMonth() + 1).padStart(2, '0'); // Months are zero-based
                const day = String(currentDatetime.getDate()).padStart(2, '0');
                const updatedHours = currentDatetime.getHours().toString().padStart(2, '0');
                const updatedMinutes = currentDatetime.getMinutes().toString().padStart(2, '0');
                const updatedDatetimeValue = `${year}-${month}-${day} ${updatedHours}:${updatedMinutes}`;

                console.log(updatedDatetimeValue);
                datetimeInput.value = updatedDatetimeValue;
            }
            else{
                datetimeInput.value = '';
            }
        
   
});
$("#login_time").on("change", function(){  
    const hoursToAddInput = document.getElementById('expected_working_hours');
            
            const hoursToAdd = parseInt(hoursToAddInput.value);
            const datetimeInput = document.getElementById('expected_logout_time');
            if (!isNaN(hoursToAdd)) {
                const cdatetimeInput = document.getElementById('login_time');
                const currentDatetimeValue = cdatetimeInput.value;
                console.log(currentDatetimeValue);
                const currentDatetime = new Date(currentDatetimeValue);
                currentDatetime.setHours(currentDatetime.getHours() + hoursToAdd);
                console.log(currentDatetime);
                const year = currentDatetime.getFullYear();
                const month = String(currentDatetime.getMonth() + 1).padStart(2, '0'); // Months are zero-based
                const day = String(currentDatetime.getDate()).padStart(2, '0');
                const updatedHours = currentDatetime.getHours().toString().padStart(2, '0');
                const updatedMinutes = currentDatetime.getMinutes().toString().padStart(2, '0');
                const updatedDatetimeValue = `${year}-${month}-${day} ${updatedHours}:${updatedMinutes}`;

                console.log(updatedDatetimeValue);
                datetimeInput.value = updatedDatetimeValue;
            }
            else{
                datetimeInput.value = '';
            }
        
   
});
</script>
<script>
     
  function saveform(){
        if (!$("#attendanceform")[0].checkValidity()) {
            $("#attendanceform").find("#submit-hidden").click();
            return;
        }


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
                    location.replace("{{url('worker-attendance')}}");


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
@include('footer')
