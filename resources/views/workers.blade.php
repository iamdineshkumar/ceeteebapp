<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chathamkulam | Worker Management</title>

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
                    <h1>Worker Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item active">Worker Management</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <br>
        <div class="container">
            <x-adminlte-button label="New Worker" data-toggle="modal" class="bg-info float-right" data-type="Worker"
                onclick="fetchPopupDetails(this)" icon="fas fa-sm fa-plus " />
            <br><br>
            <div id="workersTable">

            </div>

        </div>
        <br>
        <div class="modal fade " id="docsModal" tabindex="-1" role="dialog" aria-labelledby="docsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title " id="docsModalLabel"> Documents </h5>
                        <button type="button" class="close close-popup-docs" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="docsModalContent">
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
    function fetchWorkerList() {
        var caste = $('#workersTable');
        caste.empty();
        $.ajax({
            url: "{{ url('worker-list') }}",
            type: 'GET',
            success: function(response) {
                caste.html(response);
                $("#workersDataTable").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#workersDataTable_wrapper .col-md-6:eq(0)');
            }
        })
    }

    function fetchPopupDetails(Obj) {
        var type = $(Obj).attr('data-type');
        var caste = $('#commonModalContent');
        caste.empty();
        $.ajax({
            url: "{{ url('popup-details') }}/" + type,
            type: 'GET',
            success: function(response) {
                caste.html(response);
                $('#commonModalLabel').text("Add " + type);
                $('#commonModal').modal('show');
            }
        })
    }
    $(document).on('click', '.close-popup', function() {
        $("#commonModalForm").attr('action', '');
        $('#commonModal').modal('hide');
    });
    $(document).on('click', '.close-popup-docs', function() {
        $('#docsModal').modal('hide');
    });

    $(document).on('click', '#commonModalSubmitBtn', function() {
        if (!$("#commonModalForm")[0].checkValidity()) {
            $("#commonModalForm").find("#submit-hidden").click();
            return;
        }


        var formData = new FormData($("#commonModalForm")[0]);
        var url = $("#commonModalForm").attr('action');
        // $('#commonModalSubmitBtn').prop('disabled', true);
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
                    $("#commonModalForm").attr('action', '');
                    $("#commonModal").modal('hide');
                    $('#commonModalSubmitBtn').prop('disabled', false);
                    if (response.callFunction) {
                        eval(response.callFunction);
                    }
                } else {
                    for (let x in response.message) {
                        text = response.message[x];
                        toastr.error(text, 'Error');
                    }

                    $('#commonModalSubmitBtn').prop('disabled', false);
                }
            }
        });
    });



    $(document).ready(function() {
        $(function() {
            fetchWorkerList();
        });
    });
</script>
@include('../footer')
