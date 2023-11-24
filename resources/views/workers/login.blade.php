
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
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
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
<div Class="content">

    <p class="login-box-msg" style="color:grey">Sign in to start your session</p>
<form action="{{ url('worker-portal') }}" method="post">
    @csrf
    <div class="form-group">
        <select class="form-control" name="type" required>
        <option value="" disabled selected>-- Select Type --</option>
        <option value="worker" >Worker</option>
        </select>
      </div>
<div class="input-group mb-3">
<input type="text" name="login_name" class="form-control" placeholder="User Name" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" name="password" class="form-control" placeholder="Password" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">


<div class="col-12">
<button type="submit" class="btn btn-primary btn-sm float-right">Sign In</button>
</div>

</div>
</form>

<p class="mb-1">
<a href="">I forgot my password</a>
</p>
<p class="mb-0">
    <a href="{{ url('register-worker') }}" class="btn btn-block btn-danger">
<i class="fas fa-user mr-2"></i> Register As Worker
</a>
</p>
</div>

</div>
</div>

<div class="" style="text-align:center">
    <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
        <span class="mr-1"><?=date('Y')?> © </span> All Rights Reserved <a href="https://www.chathamkulam.com/" target="_blank" title="" class="text-dark-75 text-hover-primary">CHATHAMKULAM TECHNOLOGIES INDIA PVT. LTD.</a>
    </div>
    <!--<a href="#" class="text-primary font-weight-bolder font-size-lg">Terms</a>
    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact Us</a>-->
</div>
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ URL::asset('plugins/toastr/toastr.min.js') }}"></script>
</body>
</html>

@if (session()->has('message'))
    <script>
        toastr.success("{{ session()->get('message') }}")
    </script>
@endif
@if ($errors->any())
<script>
toastr.error("{{$errors->first()}}")
</script>
@endif
