@extends('layouts.master')

@section('title', $gallery->title)

@section('content')
    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>{{ $gallery->title }}</h2>
                        <p>{{ $gallery->event_at->format('d M Y') }}</p>
                        <p><a href="/" class="text-white">Home</a> <i class="fas fa-angle-right"></i><span>{{ $gallery->title }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-04">
        <div class="container">
            <h3 class="mb-3">Deskripsi Kegitan</h3>
            <blockquote class="mb-5">
                <q>
                    {!! $gallery->description !!}
                </q>
            </blockquote>
            <h3 class="my-3">Foto Kegitan</h3>
            <div class="row align-items-center justify-content-center">
                @forelse ($gallery->galleryPhotos as $photo)
                    <div class="col-md-6">
                        <img src="{{ $photo->image }}" class="d-block mb-4">
                    </div>
                @empty
                    <p>tidak ada photo di gallery ini</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection