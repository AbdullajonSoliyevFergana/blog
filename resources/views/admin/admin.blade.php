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

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="{{ route('admin.admin') }}">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search..." aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

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
        @if(isset($_GET['search']))
          @if(count($posts)>0)
            <h4>Query search results "<?=$_GET['search']?>"</h4>
            <p class="lead">A total of {{ count($posts) }} posts where found</p>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Postlar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
{{--                <a href="/"><button class="btn btn-success" style="margin: 20px; float:right; width:200px;">Yangi qo'shish</button></a>--}}
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Muallif</th>
                    <th>Rasm</th>
                    <th>Sarlavha</th>
                    <th>Kiritilgan vaqt</th>
                    <th>Ko'rish</th>
{{--                    <th>O'zgartirish</th>--}}
                    <th>O'chirish</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$post->post_id}}</td>
                      <td>{{$post->name}}</td>
                      <td><img src="{{ $post->img ?? asset('img/default.jpg') }}" style="width: 50px;"></td>
                      <td>{{$post->short_title}}</td>
                      <td>{{$post->created_at}}</td>
{{--                      <td><a href="{{ route('adminpost.show', ['id' => $post->post_id]) }}"><button class="btn btn-info">Ko'rish</button></a></td>--}}
{{--                      <td><a href="/"><button class="btn btn-primary">O'zgartirish</button></a></td>--}}
                      <td>
{{--                        <form action="{{ route('adminpost.destroy', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data" onsubmit="if(confirm('Ma\'lumotni o\'chirishni xohlaysizmi?'))  { return true } else {return false }">--}}
{{--                          {{ csrf_field() }}--}}
{{--                          {{ method_field('DELETE') }}--}}
{{--                          <input type="submit" value="O'chirish" class="btn btn-danger">--}}
{{--                        </form>--}}

{{--                        <form action="{{ route('adminpost.destroy', ['id'=>$post->post_id]) }}" method="post"--}}
{{--                              onsubmit="if (confirm('Will you delete the post completely?')) { return true } else { return false }">--}}
{{--                          @csrf--}}
{{--                          @method('DELETE')--}}
{{--                          <input type="submit" class="btn btn-danger" value="Delete">--}}
{{--                        </form>--}}
                      </td>

                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">

                  @if(!isset($_GET['search']))
                  {{ $posts->links() }}
                  @endif
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      @else
        <h2>Nothing found on "<?=htmlspecialchars($_GET['search'])?>" request</h2>
        <a href="{{ route('admin.admin') }}" class="btn btn-outline-primary mb-3">Show all posts</a>
      @endif
      @endif
      @if(!isset($_GET['search']))
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Postlar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                {{--                <a href="/"><button class="btn btn-success" style="margin: 20px; float:right; width:200px;">Yangi qo'shish</button></a>--}}
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Muallif</th>
                    <th>Rasm</th>
                    <th>Sarlavha</th>
                    <th>Kiritilgan vaqt</th>
                    <th>Ko'rish</th>
                    {{--                    <th>O'zgartirish</th>--}}
                    <th>O'chirish</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$post->post_id}}</td>
                      <td>{{$post->name}}</td>
                      <td><img src="{{ $post->img ?? asset('img/default.jpg') }}" style="width: 50px;"></td>
                      <td>{{$post->short_title}}</td>
                      <td>{{$post->created_at}}</td>
                      {{--                      <td><a href="{{ route('adminpost.show', ['id' => $post->post_id]) }}"><button class="btn btn-info">Ko'rish</button></a></td>--}}
                      {{--                      <td><a href="/"><button class="btn btn-primary">O'zgartirish</button></a></td>--}}
                      <td>
                        {{--                        <form action="{{ route('adminpost.destroy', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data" onsubmit="if(confirm('Ma\'lumotni o\'chirishni xohlaysizmi?'))  { return true } else {return false }">--}}
                        {{--                          {{ csrf_field() }}--}}
                        {{--                          {{ method_field('DELETE') }}--}}
                        {{--                          <input type="submit" value="O'chirish" class="btn btn-danger">--}}
                        {{--                        </form>--}}

                        {{--                        <form action="{{ route('adminpost.destroy', ['id'=>$post->post_id]) }}" method="post"--}}
                        {{--                              onsubmit="if (confirm('Will you delete the post completely?')) { return true } else { return false }">--}}
                        {{--                          @csrf--}}
                        {{--                          @method('DELETE')--}}
                        {{--                          <input type="submit" class="btn btn-danger" value="Delete">--}}
                        {{--                        </form>--}}
                      </td>

                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">

                  @if(!isset($_GET['search']))
                    {{ $posts->links() }}
                  @endif
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      @endif
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
</body>
</html>