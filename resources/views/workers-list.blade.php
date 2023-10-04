<table id="workersDataTable" class="table table-bordered table-responsive" style="width: 100%;">
    <thead>
        <tr>
            <th style="width:2%">#</th>
            <th style="width:10%">Name</th>
            <th style="width:10%">Gender</th>
            <th style="width:10%">DOB</th>
            <th style="width:10%">Mobile</th>
            <th style="width:10%">Email</th>
            <th style="width:10%">Company</th>
            <th style="width:10%">Branch</th>
            <th style="width:10%">Contractor</th>
            <th style="width:18%">Action</th>
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
                <td style="width:15%; ">
                    <button type="button" class="btn btn-primary btn-sm" data-id="{{ $worker->id }}"
                        data-name="{{ $worker->name }}" onclick="editWorker({{ $worker->id }});"><i
                            class="fas fa-pencil-alt"></i></button>
                    <a href="{{ url('worker-view/' . $worker->id) }}" class="btn btn-success btn-sm"><i
                            class="fas fa-eye"></i></a>

                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteWorker({{ $worker->id }})"><i
                            class="fas fa-trash"></i></button>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    function deleteWorker(workerId) {
        $.ajax({
            url: "{{ url('worker-delete') }}/" + workerId,
            type: 'GET',
            success: function(response) {
                if (response.status == 1) {
                    toastr.success(response.message, 'Success');
                    fetchWorkerList();

                } else {

                }
            }
        })
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
