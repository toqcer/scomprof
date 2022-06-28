<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    @php
        $css = ['bootstrap.min.css', 'all.min.css', 'owl.carousel.min.css', 'owl.carousel.css', 'style.css'];
    @endphp

    @foreach ($css as $style)
        <link rel="stylesheet" href="{{ asset('template/assets/css/' . $style) }}">
    @endforeach

    <style>
        .text-inherit {
            color: inherit;
        }
    </style>
</head>

<body>
    <header>
        <div class="my-nav">
            <div class="container">
                <div class="row">
                    <div class="nav-items">
                        <div class="menu-toggle"></div>
                        <div class="text-white logo align-items-center d-flex">
                            <a href="/" class="text-inherit">{{ env('APP_NAME') }}</a>
                        </div>
                        <div class="menu-items">
                            <div class="menu">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('about') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('feedback.create') }}">Kritik & Saran</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @isset($success)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ $success }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endisset
    
    @yield('content')

    <footer>
        <div class="container">
            <div class="copy-right border-top-0">
                <p>© {{ date('Y') }} All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>

@php
$assets = ['jquery-3.2.1.min.js', 'popper.min.js', 'bootstrap.min.js', 'owl.carousel.min.js', 'owl.carousel.js', 'script.js'];
@endphp

@foreach ($assets as $js)
    <script src="{{ asset('template/assets/js/' . $js) }}"></script>
@endforeach

</html>
