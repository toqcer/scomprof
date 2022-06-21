@extends('layouts.admin')

@section('title', 'Edit Article')

@section('content')
    <form  action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ $gallery->title }}">
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" rows="4" name="description" 
                class="form-control" required>{{ $gallery->description }}</textarea>
            </div>

            <div class="row mb-5">
                @foreach ($gallery->galleryPhotos as $photo)
                <div class="col-lg-3">
                    <img src="{{ $photo->image }}" class="img-fluid mb-2" alt="white sample" />
                    <button type="submit" class="btn btn-danger" 
                    form="delete-photo-{{ $photo->id }}">X</button>
                </div>
                @endforeach

                <a href="" class="btn btn-primary">Tambah Foto</a>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    @foreach ($gallery->galleryPhotos as $photo)
    <form action="{{ route('admin.gallery.photo.destroy', $photo->id) }}" method="post" 
        id="delete-photo-{{ $photo->id }}">
        @csrf @method('DELETE')
    </form>
    @endforeach

@endsection