<input type="hidden" name="worker_id" id="worker_id" value="{{ isset($worker) ? $worker->id : '' }}">

<div class="form-group">
    <label for="id_proof">Status</label>

    <select name='status' class="form-control" id='status' required>
        <option value="">Select Type</option>
        <option {{ isset($worker) ? (1 == $worker->status ? 'Selected' : '') : '' }} value=1>
            Open</option>
        <option {{ isset($worker) ? (2 == $worker->status ? 'Selected' : '') : '' }} value=2>
            Cancelled
        </option>
        <option {{ isset($worker) ? (3 == $worker->status ? 'Selected' : '') : '' }} value=3>
            Approved
        </option>
        <option {{ isset($worker) ? (4 == $worker->status ? 'Selected' : '') : '' }} value=4>
            Hold
        </option>
    </select>
</div>
<div class="form-group">
    <label for="remarks">Status Remarks</label>
    <textarea class="form-control" name="statusRemarks" id="statusRemarks" aria-describedby="statusRemarks">{{ isset($worker) ? $worker->statusRemarks : '' }}  </textarea>
</div>





<input id="submit-hidden" type="submit" style="display: none" />

<script>
    $("#commonModalForm").attr('action', "{{ url('status-change-worker') }}");
</script>
