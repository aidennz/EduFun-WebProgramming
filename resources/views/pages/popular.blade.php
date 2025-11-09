@extends('layout.master')

@section('title', 'Popular Articles')

@section('konten')
    <div class="container my-5">
        <h2 class="mb-4">Popular</h2>

        <div class="row">
            @foreach ($courses as $course)
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

        <div class="d-flex justify-content-center mt-4">
            <nav class="pagination">
                <li class="page-item disabled">
                    <span class="page-link border-0 bg-transparent text-dark">Page |</span>
                </li>

                @foreach ($courses->getUrlRange(1, $courses->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $courses->currentPage() ? 'active' : '' }}">
                        <a class="page-link border-0 bg-transparent text-dark" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
            </nav>
        </div>
    </div>
@endsection

<style>
    .pagination{
        gap: 4px;
    }

    .pagination .page-link{
        padding: 0;
        margin: 0;
        border: none;
        background: none;
        color: black;
        font-weight: 500;
    }

    .pagination .page-item.active .page-link {
        font-weight: 700;
        color: gray;
    } 
</style>