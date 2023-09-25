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

            <table id="example1" class="table table-bordered table-table-responsive-lg" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Branch</th>
                        <th>Contractor</th>
                        <th style="width:10%">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($workers as $key => $worker)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $worker->name }}</td>
                            <td>
                                @if ($worker->gender == 1)
                                    Male
                                @elseif($worker->gender == 2)
                                    Female
                                @else
                                    Other
                                @endif
                            </td>
                            <td>{{ $worker->dob }}</td>
                            <td>{{ $worker->mobile }}</td>
                            <td>{{ $worker->email }}</td>
                            <td>{{ $worker->company->Company_Name }}</td>
                            <td>{{ $worker->branch->BranchName }}</td>
                            <td>{{ $worker->contractor->Contractor_Name }}</td>
                            <td style="width:10%">
                                <button type="button" class="btn btn-primary btn-sm" data-id="{{ $worker->id }}"
                                    data-name="{{ $worker->name }}" onclick="editWorker({{ $worker->id }});"><i
                                        class="fas fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"
                                    onclick="deleteWorker({{ $worker->id }})"><i class="fas fa-trash"></i></button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <br>
    </div>
    <script>
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
                        // showSuccessOrErrorMessage('Success', response.message, 'success');
                        $("#commonModalForm").attr('action', '');
                        $("#commonModal").modal('hide');
                        $('#commonModalSubmitBtn').prop('disabled', false);
                        if (response.callFunction) {
                            eval(response.callFunction);
                        }
                    } else {
                        // showSuccessOrErrorMessage('Error', response.message, 'error');
                        $('#commonModalSubmitBtn').prop('disabled', false);
                    }
                }
            });
        });

        function showSuccessOrErrorMessage(heading, title, type) {
            $.toast({
                heading: heading,
                text: title,
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: (type == 'success') ? 'success' : 'error',
                hideAfter: 2000
            });
        }

        function deleteWorker(workerId) {
            $.ajax({
                url: "{{ url('worker-delete') }}/" + workerId,
                type: 'GET',
                success: function(response) {
                    if (response.status == 1) {
                        fetchWorkerList();

                    } else {

                    }
                }
            })
        }

        function editWorker(workerId) {
            var type = "Worker";
            var caste = $('#commonModalContent');
            caste.empty();
            $.ajax({
                url: "{{ url('edit-worker') }}/" + workerId,
                type: 'GET',
                success: function(response) {
                    caste.html(response);
                    $('#commonModalLabel').text("Edit " + type);
                    $('#commonModal').modal('show');
                }
            })
        }

        function fetchWorkerList() {
            $.ajax({
                url: "{{ url('worker-list') }}",
                type: 'GET',
                success: function(response) {
                    window.location.reload();
                }
            })
        }
        $(document).ready(function() {
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": true,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                });
            });
        });
    </script>
@endsection