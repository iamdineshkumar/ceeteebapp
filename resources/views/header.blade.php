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

                                {{-- {{ session('user')['UserName']}} - {{ session('user')['UserRole']}} --}}

                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div>
                                <a href="#" class="btn btn-default btn-flat">Profile</a>


                                <a href="{{ URL::asset('logout') }}" class="btn btn-default btn-flat"
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
                <span class="brand-text font-weight-light" style="font-weight:bolder !important">Chathamkulam</span>
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
                <div class="user-panel mt-3 pb-3 mb-3">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search"
                            value="{{ session('company_name') }}" title="Company" readonly
                            style="font-size: 14px !important">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar" title="Company" disabled>
                                <i class="fas  fa-building"></i>
                            </button>
                        </div>
                    </div>


                    <div class="input-group " data-widget="" style="margin-top:5px ">
                        <input class="form-control form-control-sidebar" type="search"
                            value="{{ session('branch_name') }}" title="Branch" readonly
                            style="font-size: 14px !important">
                        <div class="input-group-append share">
                            <button class="btn btn-sidebar" id="btn-sidebar" title="Branch" data-toggle="modal">
                                <i class="fas  fa-sitemap"></i>
                            </button>
                            {{-- <div>
                <ul>
                    <li><a href="#">g+</a></li>
                    <li><a href="#">facebook</a></li>
                    <li><a href="#">twitter</a></li>
                    <li><a href="#">goo+</a></li>
                    <li><a href="#">facok</a></li>
                    <li><a href="#">twier</a></li>
                </ul>
            </div> --}}
                        </div>

                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2" style="font-size: 15px">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="{{ URL::asset('Dashboard') }}"
                                @if (Request::segment(1) == 'Dashboard') class="nav-link active" @else class="nav-link " @endif>
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>
                        </li>
                        {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('MASTERS')) --}}

                        <li @if (Request::segment(1) == 'Masters' &&
                                (Request::segment(2) == 'Privilege Creation' ||
                                    'Template Creation' ||
                                    'Change Transaction Ownership' ||
                                    'User Management')) class="nav-item menu-open" @else class="nav-item " @endif>
                            <a href="#"
                                @if (Request::segment(1) == 'Masters' &&
                                        (Request::segment(2) == 'Privilege Creation' ||
                                            'Template Creation' ||
                                            'Change Transaction Ownership' ||
                                            'User Management')) class="nav-link active" @else class="nav-link " @endif>
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Masters
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Masters/Branch Details') }}"
                                        @if (Request::segment(2) == 'Branch Details') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Branch Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Masters/Company Details') }}"
                                        @if (Request::segment(1) == 'Company Details') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Company Details
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Masters/Contractor Details') }}"
                                        @if (Request::segment(1) == 'Contractor Details') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Contractor Details
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Masters/Vendor Details') }}"
                                        @if (Request::segment(1) == 'Vendor Details') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Vendor Details
                                        </p>
                                    </a>
                                </li>

                                {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('Template Creation')) --}}
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Masters/Template Creation') }}"
                                        @if (Request::segment(2) == 'Template Creation') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Template Creation</p>
                                    </a>
                                </li>
                                {{-- @endif --}}
                                {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('Change Transaction Ownership')) --}}
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Masters/Change Transaction Ownership') }}"
                                        @if (Request::segment(2) == 'Change Transaction Ownership') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Change Transaction Ownership</p>
                                    </a>
                                </li>
                                {{-- @endif --}}
                                {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('User Management')) --}}
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Masters/User Management') }}"
                                        @if (Request::segment(2) == 'User Management') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            User Management

                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('workers') }}"
                                        @if (Request::segment(2) == 'User Management') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Worker Management

                                        </p>
                                    </a>
                                </li>
                                {{-- @endif --}}
                            </ul>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('CRM')) --}}
                        <li class="nav-item">
                            <a href="{{ URL::asset('Crm') }}"
                                @if (Request::segment(1) == 'Crm') class="nav-link active" @else class="nav-link " @endif>
                                <i class="nav-icon fas fa-bell"></i>
                                <p>
                                    CRM
                                </p>
                            </a>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('PROJECTS')) --}}
                        <li
                            @if (Request::segment(1) == 'Projects' &&
                                    (Request::segment(2) == 'Estimation' ||
                                        'Material-Management' ||
                                        'Labour-Management' ||
                                        'Project-Closing' ||
                                        'Labour-Material-Items')) class="nav-item menu-open" @else class="nav-item " @endif>
                            <a href="#"
                                @if (Request::segment(1) == 'Projects' &&
                                        (Request::segment(2) == 'Estimation' ||
                                            'Material-Management' ||
                                            'Labour-Management' ||
                                            'Project-Closing' ||
                                            'Labour-Material-Items')) class="nav-link active" @else class="nav-link " @endif>
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Projects
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('Estimation')) --}}
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Projects/Estimation') }}"
                                        @if (Request::segment(2) == 'Estimation') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estimation</p>
                                    </a>
                                </li>
                                {{-- @endif --}}
                                {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('Quote From Contractors') || session()->has('Agreement With Contractor') || session()->has('Work Order Request') || session()->has('Work Order') || session()->has('QC') || session()->has('Contractor Invoice')) --}}
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Projects/Labour-Management') }}"
                                        @if (Request::segment(2) == 'Labour-Management') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Labour Management</p>
                                    </a>
                                </li>
                                {{-- @endif --}}
                                {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('Quote From Vendors') || session()->has('Material Request') || session()->has('Purchase Order Request') || session()->has('Purchase Order') || session()->has('Purchase(SRV)')) --}}
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Projects/Material-Management') }}"
                                        @if (Request::segment(2) == 'Material-Management') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Material Management</p>
                                    </a>
                                </li>
                                {{-- @endif
                  @if (session('user')['UserRole'] == 'Admin' || session()->has('Project Closing')) --}}
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Projects/Project-Closing') }}"
                                        @if (Request::segment(2) == 'Project-Closing') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Closing</p>
                                    </a>
                                </li>
                                {{-- @endif --}}

                                <li class="nav-header">MASTERS</li>

                                <li class="nav-item">
                                    <a href="{{ URL::asset('Projects/Labour-Material-Items') }}"
                                        @if (Request::segment(2) == 'Labour-Material-Items') class="nav-link active" @else class="nav-link " @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Labour/Material Items</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- @endif --}}

                        {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('Payment Order') || session()->has('Voucher Entry') || session()->has('Auto Posting') || session()->has('Accounts Masters') || session()->has('Accounts Reports') || session()->has('Accounts')) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>
                                    Accounts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ URL::asset('accounts/payment-order') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Payment Order</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ URL::asset('accounts/voucher-entry') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Voucher Entry</p>
                                    </a>
                                </li>
                                @if (session('branch') == '3015')

                                    <li class="nav-item">
                                        <a href="{{ route('auto-posting.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Auto Posting</p>
                                        </a>
                                    </li>
                                    {{-- @endif
                    @if (session('branch') == '3012' || session('branch') == '3014') --}}
                                    <li class="nav-item">
                                        <a href="{{ URL::asset('accounts/auto_posting_frsr') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Auto Posting FRSR FRSE</p>
                                        </a>
                                    </li>
                                    {{-- @endif
     --}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-wallet"></i>
                                            <p>
                                                Accounts Masters
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>

                                        <ul class="nav nav-treeview">

                                            <li class="nav-item">
                                                <a href="{{ URL::asset('accounts/group-category') }}"
                                                    class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Group Category</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ URL::asset('accounts/primary-group-category') }}"
                                                    class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Primary Group Category</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ URL::asset('accounts/ledger-group') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Ledger Group</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ URL::asset('accounts/check-book-details') }}"
                                                    class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Check Book</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ URL::asset('accounts/ledger-master') }}"
                                                    class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Ledger Master</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ URL::asset('accounts/auto-post-cdppmca') }}"
                                                    class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Auto Post Settings</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ URL::asset('accounts/voucher-manager') }}"
                                                    class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Voucher Manager</p>
                                                </a>
                                            </li>

                                        </ul>

                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-wallet"></i>
                                            <p>
                                                Accounts Reports
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>

                                        <ul class="nav nav-treeview">

                                            <li class="nav-item">
                                                <a href="{{ route('ledger_account.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Ledger Report</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ route('day_book.show') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Day Book</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ route('balance-sheet.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Balance Sheet</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ route('trial-balance.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Trial Balance</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ route('p-and-l.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Profit and Loss</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>



                            </ul>
                        </li>
                        {{-- @endif --}}

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>
                                    Common Tasks
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ URL::asset('accounts/general-work-order-request') }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Work/Material Request</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ URL::asset('accounts/general-work-order') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Work/Material Order</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ URL::asset('accounts/general-work-invoice') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Work/Material Invoicing</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        {{-- @if (session('user')['UserRole'] == 'Admin' || session()->has('Projects')) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>
                                    Land
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/List Land Project') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/List Land Product') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/List Land Proposal') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Land Proposal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/Land Purchase Booking') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Land Purchase Booking</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/Land-Purchase-Order') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Land Purchase Order</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/Sales-Order') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sale Order</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/receipts') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Receipts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/product_invoice') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/product_writeoff') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Write Off</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/land_purchase_invoice') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Purchase Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::asset('Land/payments') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Payments</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- @endif
              @if (session('user')['UserRole'] == 'Admin' || session()->has('HR')) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    HR
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>A</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>B</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>C</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        {{-- @endif
              @if (session('user')['UserRole'] == 'Admin' || session()->has('REPORTS')) --}}
                        <li
                            @if (Request::segment(1) == 'Reports' &&
                                    (Request::segment(2) == 'Payment-Tracking-Report' ||
                                        Request::segment(2) == 'Project-Invoice-Tracking-Report' ||
                                        Request::segment(2) == 'Total-Leads' ||
                                        Request::segment(2) == 'Non-Attending-Leads' ||
                                        Request::segment(2) == 'Total-Collection')) class="nav-item menu-open" @else class="nav-item " @endif>
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Reports
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if (session('user')['UserRole'] == 'Admin' || session()->has('Payment Tracking Reports'))
                                    <li class="nav-item">
                                        <a href="{{ URL::asset('Reports/Payment-Tracking-Report') }}"
                                            @if (Request::segment(2) == 'Payment-Tracking-Report') class="nav-link active" @else class="nav-link " @endif>
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Payments Tracking Report</p>
                                        </a>
                                    </li>
                                @endif
                                @if (session('user')['UserRole'] == 'Admin' || session()->has('Project Invoice Tracking Reports'))
                                    <li class="nav-item">
                                        <a href="{{ URL::asset('Reports/Project-Invoice-Tracking-Report') }}"
                                            @if (Request::segment(2) == 'Project-Invoice-Tracking-Report') class="nav-link active" @else class="nav-link " @endif>
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Project Invoice Tracking Report</p>
                                        </a>
                                    </li>
                                @endif
                                @if (session('user')['UserRole'] == 'Admin' || session()->has('Total Leads'))
                                    <li class="nav-item">
                                        <a href="{{ URL::asset('Reports/Total-Leads') }}"
                                            @if (Request::segment(2) == 'Total-Leads') class="nav-link active" @else class="nav-link " @endif>
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Total Leads</p>
                                        </a>
                                    </li>
                                @endif
                                @if (session('user')['UserRole'] == 'Admin' || session()->has('Non Attending Leads'))
                                    <li class="nav-item">
                                        <a href="{{ URL::asset('Reports/Non-Attending-Leads') }}"
                                            @if (Request::segment(2) == 'Non-Attending-Leads') class="nav-link active" @else class="nav-link " @endif>
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Non Attending Leads</p>
                                        </a>
                                    </li>
                                @endif
                                @if (session('user')['UserRole'] == 'Admin' || session()->has('Total Collection'))
                                    <li class="nav-item">
                                        <a href="{{ URL::asset('Reports/Total-Collection') }}"
                                            @if (Request::segment(2) == 'Total-Collection') class="nav-link active" @else class="nav-link " @endif>
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Total Collection</p>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ URL::asset('Help & Support') }}"
                                @if (Request::segment(1) == 'Help & Support') class="nav-link active" @else class="nav-link " @endif>
                                <i class="nav-icon fas fa-headphones"></i>
                                <p>
                                    Help & Support
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
