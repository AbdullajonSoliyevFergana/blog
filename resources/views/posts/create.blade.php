@extends('layouts.layout', ['title' => "Create a new post"])

@section('content')
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Add post</h3>
        @include('posts.parts.form')
        
        <input type="submit" value="Add post" class="btn btn-outline-success">
    </form>
@endsection