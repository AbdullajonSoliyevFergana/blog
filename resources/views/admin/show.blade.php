@extends('layouts.adminlayout')

@section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>{{ $post->title }}</h2>
            </div>
            <div class="card-body">
                <div class="card-img card-img__max"
                     style="background-image: url(../{{ $post->img ?? asset('img/default.jpg') }})">
                </div>
                <div class="card-descr">Description: {{ $post->descr }}</div>
                <div class="card-author">Author: {{ $post->name }}</div>

                <div class="card-date">Post created: {{ $post->created_at->diffForHumans() }}</div>
                <div class="card-btn">
                    <a href="{{ route('admin.index') }}" class="btn btn-outline-primary">Home</a>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

