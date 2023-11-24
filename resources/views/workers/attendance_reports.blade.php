
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chathamkulam |  Attendance Report</title>

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
                    <h1> Attendance Report</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item active"> Attendance Report</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
   
    <div class="card">
        <br>
        <div class="container">
            <form action="{{url('attendance-report')}}" id="main-form" method="POST">
                @csrf
                <div class="row" id="form-wrapper">
                    
                    <div class="form-group col-lg-4 col-md-6">
                        <label class="col-lg-4" for="from_date" style="display:inline-block; text-align:left; ">From</label>
                        <input class="form-control col-lg-7" type="date" id="from_date" name="from" value="{{ isset($data['from'])? date('d-m-Y',strtotime($data['from'])):'' }}" style="display:inline-block" required/>
                    </div>
                    <div class="form-group col-lg-4 col-md-6">
                        <label for="to_date" class="col-lg-4" style="display:inline-block;  text-align:left;">To</label>
                        <input class="form-control col-lg-7" type="date" id="to_date" name="to" value="{{ isset($data['to'])? date('d-m-Y',strtotime($data['to'])):'' }}" style="display:inline-block" required />
                    </div>
                    
                    <div class="form-group" >
                        <button type="submit" class="btn btn-secondary float-right" type="button">Generate</button>
                    </div>
                </div>
            </form>
            <br>
          @if(!empty($attendance))
                <table id="workersDataTable" class="table table-bordered table-responsive" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width:3%">#</th>
                            <th style="width:12%">Date</th>
                            <th style="width:12%">Name</th>
                            <th style="width:12%">Contractor</th>
                            <th style="width:12%">Unit</th>
                            <th style="width:12%">Work Type</th>
                            <th style="width:12%">Login Time</th>
                            <th style="width:12%">Logout Time</th>
                            <th style="width:12%">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                
                        @foreach ($attendance as $key => $att)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{date("d-m-Y", strtotime($att->date));}}</td>
                                <td>{{ $att->user->username}}</td>
                                <td>{{ $att->contractor->Contractor_Name}}</td>
                                <td>{{ $att->units->Product_Villa }}</td>
                                <td>{{ $att->work_types->Category_Name }}</td>
                                <td>{{date("d-m-Y h:i A", strtotime($att->login_time));}}</td>
                                <td>{{date("d-m-Y h:i A", strtotime($att->logout_time));}}</td>
                                <td>
                                    @if ($att->status == 1)
                                        Open
                                    @elseif($att->status == 2)
                                        Cancelled
                                    @elseif($att->status == 3)
                                        Approved
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
@endif
        </div>
        <br>

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
<script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<!-- Toastr -->
<script src="{{ URL::asset('plugins/toastr/toastr.min.js') }}"></script>
<!-- Page specific script -->
<script>
 $("#workersDataTable").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#workersDataTable_wrapper .col-md-6:eq(0)');
</script>
@if (session()->has('message'))
    <script>
        toastr.success("{{ session()->get('message') }}", 'Success')
    </script>
@endif
@if ($errors->any())
    @foreach ($errors as $error)
        <script>
            toastr.error('{{ $error->message }}', 'Error')
        </script>
    @endforeach
@endif
@include('workers/footer')
