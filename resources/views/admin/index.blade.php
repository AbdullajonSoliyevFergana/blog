@extends('layouts.adminlayout')

@section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h4>Query search results "<?=$_GET['search']?>"</h4>
            <p class="lead">A total of {{ count($posts) }} posts where found</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Posts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            {{--                <a href="/"><button class="btn btn-success" style="margin: 20px; float:right; width:200px;">Yangi qo'shish</button></a>--}}
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Post created</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
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
                                        <td><a href="{{ route('admin.show', ['id' => $post->post_id]) }}"><button class="btn btn-info">View</button></a></td>
                                        <td><a href="{{ route('admin.edit', ['id'=>$post->post_id]) }}"><button class="btn btn-primary">Edit</button></a></td>

                                        <td>
                                            <form action="{{ route('admin.destroy', ['id'=>$post->post_id]) }}" method="post"
                                                  onsubmit="if (confirm('Will you delete the post completely?')){ return true } else { return false }">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
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
            <a href="{{ route('admin.index') }}" class="btn btn-outline-primary mb-3">Show all posts</a>
        @endif
    @endif
    @if(!isset($_GET['search']))
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Posts</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        {{--                <a href="/"><button class="btn btn-success" style="margin: 20px; float:right; width:200px;">Yangi qo'shish</button></a>--}}
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Post created</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
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
                                    <td><a href="{{ route('admin.show', ['id' => $post->post_id]) }}"><button class="btn btn-info">View</button></a></td>
                                    <td><a href="{{ route('admin.edit', ['id'=>$post->post_id]) }}"><button class="btn btn-primary">Edit</button></a></td>

                                    <td>
                                    <form action="{{ route('admin.destroy', ['id'=>$post->post_id]) }}" method="post"
                                    onsubmit="if (confirm('Will you delete the post completely?')){ return true } else { return false }">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
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
@endsection
