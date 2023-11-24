<style>
    .form-control {
        font-size: 15px !important;
    }

    label {
        font-size: 15px;
    }
</style>

{{-- Floating Label --}}
<style>
    .did-floating-label-content {
        position: relative;
        margin-bottom: 20px;
    }

    .did-floating-label {
        color: #62666e;
        font-size: 15px;
        position: absolute;
        pointer-events: none;
        font-weight: normal !important;
        left: 15px;
        top: 6px;
        padding: 0 5px;
        background: #fff;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .did-floating-input,
    .did-floating-select {
        font-size: 12px;
        display: block;
        width: 100%;
        height: 40px;
        padding: 0 20px;
        background: #fff;
        color: #323840;
        border: 1px solid #62666e;
        border-radius: 4px;
        box-sizing: border-box;

        &:focus {
            outline: none;

            ~.did-floating-label {
                top: -8px;
                font-size: 15px;
            }
        }
    }

    .did-floating-textarea {
        font-size: 12px;
        display: block;
        width: 100%;
        height: 60px;
        padding: 10px 20px;
        background: #fff;
        color: #323840;
        border: 1px solid #62666e;
        border-radius: 4px;
        box-sizing: border-box;

        &:focus {
            outline: none;

            ~.did-floating-label {
                top: -8px;
                font-size: 15px;
            }
        }
    }

    select.did-floating-select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    select.did-floating-select::-ms-expand {
        display: none;
    }

    .did-floating-input:not(:placeholder-shown)~.did-floating-label {
        top: -8px;
        font-size: 15px;
    }

    .did-floating-input:focus~.did-floating-label {
        top: -8px;
        font-size: 15px;
    }

    .did-floating-select:not([value=""]):valid~.did-floating-label {
        top: -8px;
        font-size: 15px;
    }

    .did-floating-select[value=""]:focus~.did-floating-label {
        top: -8px;
        font-size: 15px;
    }

    .did-floating-textarea:not(:placeholder-shown)~.did-floating-label {
        top: -8px;
        font-size: 15px;
    }

    .did-floating-textarea:focus~.did-floating-label {
        top: -8px;
        font-size: 15px;
    }

    .did-floating-select:not([multiple]):not([size]) {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='6' viewBox='0 0 8 6'%3E%3Cpath id='Path_1' data-name='Path 1' d='M371,294l4,6,4-6Z' transform='translate(-371 -294)' fill='%23003d71'/%3E%3C/svg%3E%0A");
        background-position: right 15px top 50%;
        background-repeat: no-repeat;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        color: #1153d0 !important;
        margin-top: 14px !important;
    }


    /* .did-error-input{
      .did-floating-input, .did-floating-select {
        border: 2px solid #9d3b3b;
        color:#9d3b3b;
      }
      .did-floating-label{
        font-weight: 600;
        color:#9d3b3b;
      }
      .did-floating-select:not([multiple]):not([size]) {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='6' viewBox='0 0 8 6'%3E%3Cpath id='Path_1' data-name='Path 1' d='M371,294l4,6,4-6Z' transform='translate(-371 -294)' fill='%239d3b3b'/%3E%3C/svg%3E%0A");
    }
    } */
</style>
<link rel="stylesheet" href="{{ URL::asset('customized/side-bar-search-dropdown.css') }}">

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ URL::asset('dist/img/ceetee logo1.png') }}" alt="CEETEELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>-->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li> -->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="nav-item dropdown user user-menu">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <img src="{{ URL::asset('dist/img/user_logo.png') }}" class="user-image" alt="User Image">

                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ URL::asset('dist/img/user_logo.png') }}" class="img-circle" alt="User Image">

                            <p>

                                {{ session('worker')['username']}} - {{ session('worker')['is_admin']?'Admin':'Worker'}}

                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div>
                                <a href="#" class="btn btn-default btn-flat">Profile</a>


                                <a href="{{ URL::asset('worker-logout') }}" class="btn btn-default btn-flat"
                                    style="margin-left: 103px">Sign out</a>
                            </div>
                        </li>
                    </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: dimgray">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ URL::asset('dist/img/ceetee logo.png') }}" alt="CEETEE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light" style="font-weight:bolder !important">Worker Portal</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>-->

                <!-- SidebarSearch Form -->
                
                <!-- Sidebar Menu -->
                <nav class="mt-2" style="font-size: 15px">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item ">
                    <a href="{{ URL::asset('attendance') }}"
                        @if (Request::segment(1) == 'Attendance') class="nav-link active" @else class="nav-link " @endif>
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                            Attendance

                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ URL::asset('attendance-report') }}"
                        @if (Request::segment(1) == 'Reports') class="nav-link active" @else class="nav-link " @endif>
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Report

                        </p>
                    </a>
                </li>
                        <li class="nav-item ">
                            <a href="{{ URL::asset('change-password') }}"
                                @if (Request::segment(1) == 'Password') class="nav-link active" @else class="nav-link " @endif>
                                <i class="nav-icon fas fa-lock"></i>
                                <p>
                                    Change Password

                                </p>
                            </a>
                        </li>
                       
                        
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
