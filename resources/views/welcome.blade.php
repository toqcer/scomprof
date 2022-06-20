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
                        <div class="button-01">
                            <ul>
                                <li><a href="#">Get Started Now</a></li>
                                <li><a href="#">View Courses</a></li>
                            </ul>
                        </div>
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

    <!-- ====================== section started====================== -->

    <section class="bg-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-chalkboard-teacher"></i>
                        </div>
                        <div class="content">
                            <h3>Professional Teachers</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-globe-americas"></i>
                        </div>
                        <div class="content">
                            <h3>Learn Anywhere Online</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <h3>Graduation Certificate</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-backpack"></i>
                        </div>
                        <div class="content">
                            <h3>Over 1000 Scholarship</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Featured started====================== -->

    <section class="bg-02">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Featured courses</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime totam quo, ducimus aliquid
                            quisquam minima perspiciatis repellendus, minus tenetur reiciendis quis? Consequatur
                            perferendis deleniti, rerum delectus consectetur modi praesentium deserunt.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('template/assets/images/featured/1.jpg') }}">
                        </div>
                        <div class="content">
                            <h3>MBA</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>3 Year Course</li>
                                <li>100 Clasess</li>
                                <li>10 am - 1 pm</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('template/assets/images/featured/2.jpg') }}">
                        </div>
                        <div class="content">
                            <h3>BE</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>3 Year Course</li>
                                <li>100 Clasess</li>
                                <li>10 am - 1 pm</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('template/assets/images/featured/3.jpg') }}">
                        </div>
                        <div class="content">
                            <h3>ME</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>3 Year Course</li>
                                <li>100 Clasess</li>
                                <li>10 am - 1 pm</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('template/assets/images/featured/4.jpg') }}">
                        </div>
                        <div class="content">
                            <h3>MBBS</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>3 Year Course</li>
                                <li>100 Clasess</li>
                                <li>10 am - 1 pm</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('template/assets/images/featured/5.jpg') }}">
                        </div>
                        <div class="content">
                            <h3>MSC</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>3 Year Course</li>
                                <li>100 Clasess</li>
                                <li>10 am - 1 pm</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-box">
                        <div class="feature-card">
                            <a href="#"><i class="far fa-link"></i></a>
                            <img src="{{ asset('template/assets/images/featured/6.jpg') }}">
                        </div>
                        <div class="content">
                            <h3>MA</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p>
                            <ol>
                                <li>3 Year Course</li>
                                <li>100 Clasess</li>
                                <li>10 am - 1 pm</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-03">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-history"></i>
                        <div class="counting" data-count="967">100</div>
                        <h5>YEAR OF HISTORY</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-graduation-cap"></i>
                        <div class="counting" data-count="967">100</div>
                        <h5>ACTIVE STUDENTS</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-globe"></i>
                        <div class="counting" data-count="967">100</div>
                        <h5>ONLINE COURSES</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-registered"></i>
                        <div class="counting" data-count="967">100</div>
                        <h5>REGISTERED STUDENTS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Blog Section started====================== -->

    <section class="bg-04">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Latest News</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we"></div>
                        <div class="_xs_we_er">
                            <div class="_he_w">
                                <h3>Easy English Learning Way</h3>
                                <ol>
                                    <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                                </ol>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we" style="background:url({{ asset('template/assets/images/blog/img-01.jpg') }}"></div>
                        <div class="_xs_we_er">
                            <div class="_he_w">
                                <h3>Summer Course Start From 1st June</h3>
                                <ol>
                                    <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                                </ol>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we" style="background:url({{ asset('template/assets/images/blog/img-03.jpg') }}"></div>
                        <div class="_xs_we_er">
                            <div class="_he_w">
                                <h3>Guest Interview will Occur Soon</h3>
                                <ol>
                                    <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                                </ol>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection