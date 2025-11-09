@extends('layout.master')

@section('title', $writer->name)

@section('konten')
    <div class="container my-5">
        <div class="text-center mb-4">
            <img src="{{ asset($writer->image) }}" class="rounded-circle mb-3" alt="{{ ($writer->name) }}" style="width: 150px; height: 150px; object-fit: cover;">
            <h2>{{ $writer->name }}</h2>
            <p class="text-muted">{{ $writer->specialist }}</p>
        </div>

        <div class="row">
            @forelse ($writer->courses as $course)
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
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">No articles found.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection