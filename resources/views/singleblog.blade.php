@extends('layouts.main')

@section('container')
    <h1>Single Blog {{ $post->title }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->slug }}</h6>
            <div class="card-text">{!! $post->body !!}</div>
            <a href="/blog" class="card-link">Back</a>
        </div>
    </div>
@endsection
