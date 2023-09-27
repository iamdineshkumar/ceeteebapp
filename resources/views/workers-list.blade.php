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
</script>
