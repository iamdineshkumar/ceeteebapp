<table id="workersDataTable" class="table table-bordered table-responsive" style="width: 100%;">
    <thead>
        <tr>
            <th style="width:2%">#</th>
            <th style="width:10%">Name</th>
            <th style="width:10%">Address</th>
            <th style="width:10%">Mobile</th>
            <th style="width:10%">Age</th>
            <th style="width:10%">Labour Classification</th>
            <th style="width:10%">Contractor</th>
            <th style="width:10%">Status</th>
            <th style="width:10%">Active</th>
            <th style="width:18%">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($workers as $key => $worker)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->address }}</td>
                <td>{{ $worker->mobile }}</td>
                <td>{{ date_diff(date_create($worker->dob), date_create('today'))->y }}</td>
                {{-- <td>{{ date_diff(date_create($worker->dob), date_create('today'))->y }}</td> --}}
                <td>{{ $worker->labour->Category_Name }}</td>
                <td>{{ $worker->contractor->Contractor_Name }}</td>
                <td>
                    @if ($worker->status == 1)
                        Open
                    @elseif($worker->status == 2)
                        Cancelled
                    @elseif($worker->status == 3)
                        Approved
                    @elseif($worker->status == 4)
                        OnHold
                    @endif
                </td>
                <td>
                    @if ($worker->active == 1)
                        Yes
                    @else
                        No
                    @endif
                </td>
                {{-- <td>{{ $worker->company->Company_Name }}</td>
                <td>{{ $worker->branch->BranchName }}</td> --}}
                <td style="width:15%; ">
                    <a href="{{ url('edit-worker/' . $worker->id) }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-pencil-alt"></i></a>
                    <a href="{{ url('worker-view/' . $worker->id) }}" class="btn btn-success btn-sm"><i
                            class="fas fa-eye"></i></a>
                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteWorker({{ $worker->id }})"><i
                            class="fas fa-trash"></i></button>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="modal-worker-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Worker</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ url('worker-delete') }}" id="">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group delete-form-group">
                            <input type="hidden" name="workerid">
                            <label>Are you sure?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn_delete" name="">Delete</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    function deleteWorker(id) {
        // console.log(id);
        $("[name='workerid']").val(id);
        $('#modal-worker-delete').modal('show');
    }

    function docsView(workerId) {
        var caste = $('#docsModalContent');
        caste.empty();
        $.ajax({
            url: "{{ url('docs-view-worker') }}/" + workerId,
            type: 'GET',
            success: function(response) {
                caste.html(response);
                $('#docsModal').modal('show');
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
</script>
