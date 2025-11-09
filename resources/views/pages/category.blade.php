@extends('layout.master')

@section('title', $category->name)

@section('konten')
    <div class="container my-5">
        <h2 class="mb-4">{{ $category->name }}</h2>

        <div class="row">
            @foreach ($category->courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <img src="{{ asset($course->image) }}" style="height: 100px; object-fit: cover;" alt="{{ $course->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->name }}</h5>
                            <p class="text-muted small">{{ $course->published_at }} | By {{ $course->writer->name }}</p>
                            <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                            <a href="{{ route('pages.course.show', $course->id) }}" class="btn btn-primary btn-sm">Read more...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection