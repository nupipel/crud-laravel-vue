@extends('layouts.main')

@section('container')
    <h1>blog </h1>
    <div class="row">
        @if (!empty($category))
            <h3>Category {{ $category->name }}</h3>
        @endif
        <div class="col-sm-8">
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
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <ul class="list-group">
                        @foreach ($categories as $cat)
                            <li class="list-group-item"><a href="/categories/{{ $cat->slug }}">{{ $cat->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>

    </div>
@endsection
