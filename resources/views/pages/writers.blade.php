@extends('layout.master')

@section('title', 'Writers')

@section('konten')
    <div class="container my-5">
        <h2 class="mb-4">Our Writers:</h2>

        <div class="row justify-content-center">
            @foreach ($writers as $writer)
                <div class="col-md-4 mb-4">
                    <div class="card-body text-center">
                        <a class="d-flex justify-content-center" href="{{ route('pages.writer.show', $writer->id) }}"><img src="{{ asset($writer->image) }}" class="rounded-circle mb-3" alt="{{ ($writer->name) }}" style="width: 150px; height: 150px; object-fit: cover;"></a>
                        <h4>{{ $writer->name }}</h4>
                        <p class="text-muted">{{ $writer->specialist }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection