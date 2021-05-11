<!DOCTYPE html>
<html>
@include('layouts.adminhead')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php
//  use \App\Post
//  $posts = App\Post::join('users', 'author_id', '=', 'users.id')
//          ->orderBy('posts.created_at', 'desc')
////          ->pagination(4);


  ?>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Postlar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <a href="/"><button class="btn btn-success" style="margin: 20px; float:right; width:200px;">Yangi qo'shish</button></a>
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Muallif</th>
                    <th>Rasm</th>
                    <th>Sarlavha</th>
                    <th>Kiritilgan vaqt</th>
                    <th>Ko'rish</th>
                    <th>O'zgartirish</th>
                    <th>O'chirish</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$post->post_id}}</td>
                      <td>{{$post->name}}</td>
                      <td><img src="storage/{{$post->img}}" style="width: 50px;"></td>
                      <td>{{$post->short_title}}</td>
                      <td>{{$post->created_at}}</td>
                      <td><a href="{{ route('admin.show', ['id' => $post->post_id]) }}"><button class="btn btn-info">Ko'rish</button></a></td>
                      <td><a href="/"><button class="btn btn-primary">O'zgartirish</button></a></td>
                      <td><form action="/" method="post" enctype="multipart/form-data" onsubmit="if(confirm('Ma\'lumotni o\'chirishni xohlaysizmi?'))  { return true } else {return false }">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <input type="submit" value="O'chirish" class="btn btn-danger">
                        </form></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
                  {{ $posts->links() }}
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
