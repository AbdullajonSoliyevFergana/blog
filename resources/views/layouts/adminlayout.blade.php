<!DOCTYPE html>
<html>
@include('layouts.adminhead')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3" action="{{ route('admin.index') }}">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search..." aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
{{--        <ul class="navbar-nav ml-auto">--}}
{{--            <!-- Authentication Links -->--}}
{{--            @guest--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                </li>--}}

{{--            @else--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                        {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                    </a>--}}

{{--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                            {{ __('Logout') }}--}}
{{--                        </a>--}}

{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            @endguest--}}
{{--        </ul>--}}

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('layouts.adminsidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Laravel</h1>
                    </div><!-- /.col -->

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Post</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @yield('content')

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2021.</strong>
        Design by Abdullajon.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.5
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{asset('plugins/jquery/jquery.min.js')}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{asset('plugins/jquery-ui/jquery-ui.min.js')}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- ChartJS -->
<script src={{asset('plugins/chart.js/Chart.min.js')}}></script>
<!-- Sparkline -->
<script src={{asset('plugins/sparklines/sparkline.js')}}></script>
<!-- JQVMap -->
<script src={{asset('plugins/jqvmap/jquery.vmap.min.js')}}></script>
<script src={{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}></script>
<!-- jQuery Knob Chart -->
<script src={{asset('plugins/jquery-knob/jquery.knob.min.js')}}></script>
<!-- daterangepicker -->
<script src={{asset('plugins/moment/moment.min.js')}}></script>
<script src={{asset('plugins/daterangepicker/daterangepicker.js')}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}></script>
<!-- Summernote -->
<script src={{asset('plugins/summernote/summernote-bs4.min.js')}}></script>
<!-- overlayScrollbars -->
<script src={{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('dist/js/adminlte.js')}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset('dist/js/pages/dashboard.js')}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset('dist/js/demo.js')}}></script>

<script src={{asset('js/app.js')}}></script>

<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>