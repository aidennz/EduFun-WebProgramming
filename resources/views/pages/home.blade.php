@extends('layout.master')

@section('title', 'Home')

@section('konten')
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <img src="{{ asset('img/HomePic.jpg') }}" class="img-fluid w-100" style="height:50vh; object-fit:cover;" alt="homePic">
            </div>
        </div>

        <div class="row">
            @foreach($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card article-card h-100 shadow-sm">
                    <img src="{{ asset($course->image) }}" class="card-img-top" style="height: 50px; object-fit: cover;" alt="">
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