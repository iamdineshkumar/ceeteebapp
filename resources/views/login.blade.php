<?php
if(isset(session('user')['UserBranch']))
{

  $branchArray = session('user')['UserBranch'];
}
else
{
  $branchArray = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>CEETEE BUILDERS | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/
    /all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
   <!-- Toastr -->
   <link rel="stylesheet" href="{{URL::asset('plugins/toastr/toastr.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('customized/loginpage.css') }}">
  <style>

    </style>
</head>
<body>

<div class="login-form">
 <div style="text-align:center;">
<img src="{{ URL::asset('dist/img/ceetee logo1.png') }}" alt="CEETEE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width:100px" >
</div>

<h5>Welcome To Chathamkulam Digital Platform For Project Management Consultancy (CDPPMC) </h5>

<div Class="container">
<div Class="main">

<div class="form-img">
<img src="{{ URL::asset('dist/img/ckm_builders4.jpg') }}" alt="CEETEE Logo" class="" >
</div>

 @if (session()->has('user'))
 <?php
  $str_arr = array();
 if(isset(session('user')['UserCompany']))
 {
  $str_arr = explode (",", session('user')['UserCompany']);
 }
 ?>
 <div Class="content">

    <p class="login-box-msg" style="color:grey">Select Company & Branch to Continue</p>

    <form action="{{url('cbLogin')}}" method="POST">
      @csrf
      <div class="form-group">
        <select class="form-control" name="slct_company" required>
        <option value="" disabled selected>-- Select Company --</option>
        @foreach ($company as $company)
        <option value="{{ $company->Company_ID}}">{{$company->Company_Name}}</option>
        @endforeach
        </select>
      </div>
      <div class="form-group">
          <select class="form-control" name="slct_branch" required>
        <option value="" disabled selected>-- Select Branch --</option>

        </select>
      </div>


      <div class="row">
        <div class="col-8">

        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Continue</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



</div>
 @else
 <div Class="content">

    <p class="login-box-msg" style="color:grey">Sign in to start your session</p>

    <form action="{{url('userLogin')}}" method="POST">
      @csrf
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" name="uname" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="pword" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-8">
        <p class="mb-1">
      <a href="forgot-password.html">I forgot my password</a>
    </p>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
</div>
 @endif
</div>

</div>
<!--begin::Content footer-->
<div class="" style="text-align:center">
						<div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
							<span class="mr-1"><?=date('Y')?> © </span> All Rights Reserved <a href="https://www.chathamkulam.com/" target="_blank" title="" class="text-dark-75 text-hover-primary">CHATHAMKULAM TECHNOLOGIES INDIA PVT. LTD.</a>
						</div>
						<!--<a href="#" class="text-primary font-weight-bolder font-size-lg">Terms</a>
						<a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact Us</a>-->
					</div>
					<!--end::Content footer-->
<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ URL::asset('plugins/toastr/toastr.min.js') }}"></script>
<script>
//get the csrf token and add with ajax code
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
    $(document).ready(function(){
        $("select[name='slct_company']").val("");
        $("select[name='slct_branch']").val("");
});
$("select[name='slct_company']").change(function(e){
   var  companyid=$(this).val();
    e.preventDefault();
    var div=$(this).parent().parent();
    var branch = "{{ $branchArray }}";
    var Branch_Arr = branch.split(",");
    //console.log(Branch_Arr);
    var op="";
        $.ajax({
        url : "{{ url::asset('userBranch') }}",
        type: "POST",
        data: {'id':companyid},
        success: function(data)
        {
            //console.log(data.length);
            op+='<option value="" selected disabled>-- Select Branch --</option>';
            for(var i=0; i<data.length; i++)
            {
              // console.log(Branch_Arr);
              // // if(Branch_Arr.includes(data[i].Branch_ID))
              // if($.inArray(data[i].Branch_ID, Branch_Arr) >= 0)
              // {
              //   op+='<option value="'+data[i].Branch_ID+'">'+data[i].BranchName+'</option>';
              // }
              for(var j=0; j<Branch_Arr.length; j++)
              {
                //if(Branch_Arr[j]==data[i].Branch_ID)
                //{
                  op+='<option value="'+data[i].Branch_ID+'">'+data[i].BranchName+'</option>';
               // }
              }
                
            }
            div.find("select[name='slct_branch']").html('');
            div.find("select[name='slct_branch']").append(op);
		},
        error: function (data)
        {


        }
    });
});

</script>
@if($errors->any())
<script>
  toastr.error('{{$errors->first()}}')
</script>
@endif
</body>
</html>
