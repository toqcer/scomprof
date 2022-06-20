@extends('layouts.master')

@section('content')
    <section id="carouselExampleFade" class="carousel slide carousel-fade slider" data-ride="carousel">
        <div class="carousel-inner">
            @for ($i = 0; $i < 3; $i++)
                <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                    <img src="{{ asset('template/assets/images/slider/'. $i + 1 .'.jpg') }}" class="d-block" alt="...">
                    <div class="carousel-caption">
                        <h2>Best Education For Diploma</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui perspiciatis, eveniet sequi labore
                            vel itaque adipisci odio necessitatibus voluptatibus saepe, impedit enim unde velit amet rem,
                            suscipit corrupti vero ad.</p>
                    </div>
                </div>
            @endfor
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
                                <a href="#"><i class="far fa-link"></i></a>
                                <img src="{{ asset($article->cover) }}">
                            </div>
                            <div class="content">
                                <h3>{{ $article->title }}</h3>
                                <p>{{ Str::limit($article->content, 60) }}</p>
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
    
@endsection