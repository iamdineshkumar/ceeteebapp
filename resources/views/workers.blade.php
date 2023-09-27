@extends('adminlte::page')

@section('title', 'Workers')
@section('content_header')
    <h1>Workers</h1>
@stop
@section('content')

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
    </div>
    <script>
        function fetchWorkerList() {
            var caste = $('#workersTable');
            caste.empty();
            $.ajax({
                url: "{{ url('worker-list') }}",
                type: 'GET',
                success: function(response) {
                    caste.html(response);
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": false,
                        "autoWidth": true,
                        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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

        $(document).on('click', '#commonModalSubmitBtn', function() {
            if (!$("#commonModalForm")[0].checkValidity()) {
                $("#commonModalForm").find("#submit-hidden").click();
                return;
            }
            var formData = new FormData($("#commonModalForm")[0]);
            var url = $("#commonModalForm").attr('action');
            $('#commonModalSubmitBtn').prop('disabled', true);
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
@endsection
