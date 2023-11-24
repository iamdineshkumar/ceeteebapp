{{-- Branch Change Model --}}
<div class="modal fade " id="commonModal" tabindex="-1" role="dialog" aria-labelledby="commonModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title " id="commonModalLabel"></h5>
                <button type="button" class="close close-popup" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="commonModalForm" action="">
                @csrf
                <div class="modal-body" id="commonModalContent">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-popup" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="commonModalSubmitBtn">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
</script>
<script>
    // $('#btn-sidebar').on('click', function(){
    //     var op = "";
    //         $.ajax({
    //             url: "{{ url::asset('userBranch') }}",
    //             type: "POST",

    //             data: {
    //                 'id': '{{ session('company') }}'
    //             },
    //             success: function(data) {
    //                 $("select[name='slct_branch']").html('');
    //                 op += '<option value="" selected disabled> </option>';

    //                 for (var i = 0; i < data.length; i++) {
    //                     op+='<option value="'+data[i].Branch_ID+'">'+data[i].BranchName+'</option>';
    //                 }
    //                 $("select[name='slct_branch']").append(op);


    //             },
    //             error: function(data) {


    //             }
    //         });
    //         $("#modal-change-branch").modal("show");
    // })
</script>



<footer class="main-footer">
    <strong>2022 &copy; All Rights Reserved. <a href="#">CHATHAMKULAM TECHNOLOGIES INDIA PVT.LTD</a>.</strong>

    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>

</body>

</html>
