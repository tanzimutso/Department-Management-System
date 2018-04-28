<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="{{ url('Icon.png') }}">
    <title>@yield('title')</title>

     
    <!-- Plugins and scripts required by this views -->
    
    <!-- Icons -->
    <link href="{{ url('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Premium Icons -->
    <link href="{{ url('assets/css/glyphicons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/glyphicons-filetypes.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/glyphicons-social.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/sweetalert2.min.css') }}" rel="stylesheet">
    

    <!-- Main styles for this application -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden" style="background-color: #c8c687;">
    <header class="app-header navbar" style="background-color: #147b86;">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
        <a class="navbar-brand" href="{{ url('/') }}" style="background-color: #147b86;"><h4 style="text-align: center; color: #fff8c5; ">Dept Management</h4></a>
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>

            <li class="nav-item px-1">
                <a class="nav-link" href="{{ url('/') }}" style="color: #fff8c5; font-size: 15px;">Home</a>
            </li>


            <li class="nav-item px-1">
                <a class="nav-link" href="{{ url('/clock') }}" style="color: #fff8c5; font-size: 15px;">Current Time</a>
            </li>

            <li class="nav-item px-1">
                <a class="nav-link" href="{{ url('/notice') }}" style="color: #fff8c5; font-size: 15px;">Notice</a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">   
                    <span  class="hidden-md-down" style="margin-left: 400px; color: #fff8c5; font-weight: bold;">{{ Auth::user()->name.' '.Auth::user()->lastname }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();""><i class="fa fa-lock"></i> Logout</a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
            </li>

        </ul>

    </header>


    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_student_indexall') }}">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i><h6 style="color: #fff8c5;">Students</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_teacher_index') }}">
                            <i class="fa fa-male" aria-hidden="true"></i><h6 style="color: #fff8c5;">Teachers</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('allcourse') }}">
                            <i class="fa fa-sticky-note-o" aria-hidden="true"></i><h6 style="color: #fff8c5;">Course Details</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('allnotice') }}">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i><h6 style="color: #fff8c5;">Notice</h6>
                        </a>
                    </li>

                    @if(Auth::User()->role == '2')

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('selectcourse') }}">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i><h6 style="color: #fff8c5;">Routine</h6>
                        </a>
                    </li>

                    @endif


                    @if(Auth::User()->role == '2')

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('allbatches') }}">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i><h6 style="color: #fff8c5;">Lecture Upload</h6>
                        </a>
                    </li>

                        @endif

                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main" >
            <div class="container-fluid pt-2">

                <div class="animated fadeIn">

                    @yield('content')


                </div>

            </div>
            <!-- /.conainer-fluid -->
        </main>

    </div>

    <footer class="app-footer" style="background-color: #c8c687; color: black; text-align: center;">
        {{--<b>© Tanzim Utso,</b>--}}
        <span>Follow me on</span>
        <a style="color: black;" href="https://www.facebook.com/tusarsuvra.tusarsuvra" target="_blank"><button type="button" class="btn btn-facebook icon" style="margin-bottom: 4px"></button></a>
        <a style="color: black;" href="https://www.linkedin.com/in/tanzim-utso-577915136/" target="_blank"></a> <button type="button" class="btn btn-linkedin icon" style="margin-bottom: 4px">
            <span>LinkedIn</span>
        </button>
        <a style="color: black;" href="https://plus.google.com/u/0/115503360738141354343" target="_blank"></a><button type="button" class="btn btn-google-plus icon" style="margin-bottom: 4px">
            <span>Google+</span>
        </button>

    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ url('assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/libs/tether.min.js') }}"></script>
    <script src="{{ url('assets/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/libs/pace.min.js') }}"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="{{ url('assets/js/libs/Chart.min.js') }}"></script>


    <!-- GenesisUI main scripts -->

    <script src="{{ url('assets/js/app.js') }}"></script>

    <script src="{{ url('assets/js/libs/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/js/libs/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/js/sweetalert2.min.js') }}"></script>

    <!-- Custom scripts required by this view -->
    <script src="{{ url('assets/js/views/tables.js') }}"></script> 

    @yield('script')

</body>

</html>

