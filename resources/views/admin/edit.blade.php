@extends('layouts.adminlayout')

@section('content')
<form action="{{ route('admin.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <h3>Edit post</h3>
    @include('admin.parts.form')

    <input type="submit" value="Edit post" class="btn btn-outline-success mb-2">
</form>
@endsection
