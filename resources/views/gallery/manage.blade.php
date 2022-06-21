@extends('layouts.admin')

@section('title', 'Event Gallery')

@section('content')
    <section class="content">
        <div class="container-fluid">
            @foreach ($galleries as $gallery)
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">{{ $gallery->title }}</h4>
                                <p>{{ $gallery->description }}</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($gallery->galleryPhotos as $photo)
                                        <div class="col-sm-2">
                                            <a href="{{ $photo->image }}" data-toggle="lightbox"
                                                data-title="{{ $gallery->title }}" data-gallery="gallery">
                                                <img src="{{ $photo->image }}" 
                                                class="img-fluid mb-2" alt="white sample" />
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- /.container-fluid -->
    </section>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    </script>
@endpush