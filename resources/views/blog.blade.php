@extends('layouts.main')

@section('container')
    <h1>blog </h1>

    @foreach ($post as $p)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $p->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $p->slug }}</h6>
                <p class="card-text">{{ $p->excerpt }}</p>
                <a href="/blog/{{ $p->slug }}" class="card-link">Detail...</a>
            </div>
        </div>
        <br>
    @endforeach
@endsection
