<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School</title>

    @php
        $css = [
            'bootstrap.min.css',
            'all.min.css',
            'owl.carousel.min.css',
            'owl.carousel.css',
            'style.css'
        ];
    @endphp

    @foreach ($css as $style)
    <link rel="stylesheet" href="{{ asset('template/assets/css/' . $style) }}">
    @endforeach
</head>

<body>
    <header>
        <div class="my-nav">
            <div class="container">
                <div class="row">
                    <div class="nav-items">
                        <div class="menu-toggle"></div>
                        <div class="logo">
                            <img src="{{ asset('template/assets/images/logo-01.png') }}">
                        </div>
                        <div class="menu-items">
                            <div class="menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>SMART GROUP</h3>
                        <p>ipsum dolor sit amet, Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>Quick Links</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i>home</li>
                            <li><i class="far fa-angle-right"></i>About Us</li>
                            <li><i class="far fa-angle-right"></i>Services</li>
                            <li><i class="far fa-angle-right"></i>Blog</li>
                            <li class="last"><i class="far fa-angle-right"></i>Contact Us</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>Courses</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i>MBA</li>
                            <li><i class="far fa-angle-right"></i>ME</li>
                            <li><i class="far fa-angle-right"></i>BE</li>
                            <li><i class="far fa-angle-right"></i>MBBS</li>
                            <li class="last"><i class="far fa-angle-right"></i>MA</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>Contact Us</h3>
                        <form class="my-form">
                            <div class="form-group">
                                <input class="form-control" type="emal" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea rows="3" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <a href="#">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="copy-right">
                        <p>© 2020 All Rights Reserved by<a href="https://www.smarteyeapps.com/">Smarteyeapps.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

@php
    $assets = [
        'jquery-3.2.1.min.js',
        'popper.min.js',
        'bootstrap.min.js',
        'owl.carousel.min.js',
        'owl.carousel.js',
        'script.js'
    ];
@endphp

@foreach ($assets as $js)
<script src="{{ asset('template/assets/js/' . $js) }}"></script>
@endforeach

</html>