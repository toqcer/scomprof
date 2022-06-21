@extends('layouts.master')

@section('title', $article->title)

@section('content')
    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>{{ $article->title }}</h2>
                        <p><a href="/" class="text-white">Home</a> <i class="fas fa-angle-right"></i><span>{{ $article->title }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-04">
        <div class="container">
            <img src="{{ $article->cover }}" alt="" class="d-block mb-3 mx-auto">
            {!! $article->content !!}
        </div>
    </section>
@endsection