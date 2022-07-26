@extends('layouts.main')

@section('container')
    <h3>Category {{ $category }}</h3>
    <div class="row">
        <div class="col-sm-8">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->slug }}</h6>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/blog/{{ $post->slug }}" class="card-link">Detail...</a>
                    </div>
                </div>
                <br>
            @endforeach
        </div>

    </div>
@endsection
