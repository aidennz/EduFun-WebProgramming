@extends('layout.master')

@section('konten')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="mb-3">{{ $course->name }}</h1>

                <img src="{{ asset($course->image) }}" class="img-fluid w-100 rounded mb-4" alt="{{ ($course->name) }}">
                
                <p class="text-muted">
                    {{ $course->published_at }} | By {{ $course->writer->name }}
                </p>

                <div class="article-content">
                    {!! nl2br(e($course->content)) !!}
                </div>
            </div>
        </div>
    </div>
@endsection