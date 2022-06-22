@extends('layouts.master')

@section('content')
    <section id="carouselExampleFade" class="carousel slide carousel-fade slider" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($carousels as $carousel)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset($carousel->image) }}" class="d-block">
                <div class="carousel-caption">
                    <h2>{{ $carousel->gallery->title }}</h2>
                    <p>{{ $carousel->gallery->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

    <!-- ====================== Featured started====================== -->

    <section class="bg-02">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Berita dan artikel</h2>
                    </div>
                </div>

                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-box">
                            <div class="feature-card">
                                <a href="{{ route('article.show', $article->id) }}"><i class="far fa-link"></i></a>
                                <img src="{{ asset($article->cover) }}">
                            </div>
                            <div class="content">
                                <h3>{{ $article->title }}</h3>
                                <ol>
                                    <li>{{ $article->created_at->format('d M Y') }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Event & Gallery</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="owl-carousel owl-stage-outer">
                        @foreach ($galleries as $gallery)
                            <div class="item">
                                <div class="team-card">
                                    <div class="image-team">
                                        <img src="{{ $gallery->carousel->image }}">
                                    </div>
                                    <div class="team-content">
                                        <h3>
                                            <a href="{{ route('gallery.show', $gallery->id) }}" class="text-inherit">
                                                {{ $gallery->title }}
                                            </a>
                                        </h3>
                                        <p>Event Tanggal: {{ $gallery->event_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection