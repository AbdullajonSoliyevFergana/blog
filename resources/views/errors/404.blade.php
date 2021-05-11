@extends('layouts.layout', ['title' => "404 error. You are in the wrong place!"])

@section('content')
    <div class="container">
        <div class="card">
        <h2 class="card-header">You went to the wrong place, my friend! (404 error)</h2>
        <div class="card-error"
                    style="background-image: url({{ asset('img/error.jpg') }})">
                </div>
        {{-- <img src="{{ asset('img/error.jpg') }}" alt="error"> --}}
    </div>

    <a href="/" class="btn btn-outline-primary">Return to the home page immediately!</a>
    </div>
@endsection
