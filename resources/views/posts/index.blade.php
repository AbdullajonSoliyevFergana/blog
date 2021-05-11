@extends('layouts.layout', ['title' => 'Home page'])

@section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Query search results "<?=$_GET['search']?>"</h2>
            <p class="lead">A total of {{ count($posts) }} posts where found</p>
        @else
            <h2>Nothing found on "<?=htmlspecialchars($_GET['search'])?>" request</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Show all posts</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                <div class="card-body">
                  <div class="card-img" style="background-image: url(../public/{{ $post->img ?? asset('img/default.jpg') }})"></div>
                  <div class="card-author">Author: {{ $post->name }}</div>
                  <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary">View post</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if(!isset($_GET['search']))
    {{ $posts->links() }}
    @endif
@endsection
