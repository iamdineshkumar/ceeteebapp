<input type="hidden" name='worker_id' value="{{ $worker_docs->workerId }}">
<input type="hidden" name='doc_id' value="{{ $worker_docs->id }}">
<div class="form-group">
    <label for="doc_name">Document Name</label>
    <input class="form-control" value="{{ $worker_docs->doc_name }}" type="text" name="doc_name" id="doc_name"
        required>
</div>
<div class="form-group">
    <a href="{{ asset($worker_docs->doc_location) }}" target="_blank">Click here to view Previous Document</a>
</div>
<div class="form-group">
    <label for="document">Document</label>
    <input class="form-control" type="file" name="document" id="document">
</div>
<p style="color:blue;">(If you upload the new document here it will delete your previous document and replace it.
    Otherwise its optional)</p>
<div class="form-group">
    <label for="remarks">Remarks</label>
    <textarea class="form-control" name="remarks" id="remarks" aria-describedby="remarks">{{ $worker_docs->remarks }} </textarea>
</div>
<input id="submit-hidden" type="submit" style="display: none" />
<script>
    $("#commonModalForm").attr('action', '{{ url('edit-docs') }}');
</script>
