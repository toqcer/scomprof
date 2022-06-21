@extends('layouts.admin')

@section('title', 'Edit Gallery')

@section('content')
    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ $gallery->title }}">
            </div>
            
            <div class="form-group">
                <label for="event_at">Tanggal Event</label>
                <input type="date" class="form-control" id="event_at" name="event_at" required value="{{ $gallery->event_at->format('Y-m-d') }}">
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" rows="4" name="description" 
                class="form-control" required>{{ $gallery->description }}</textarea>
            </div>

            <div class="row mb-5 align-items-center">

                @foreach ($gallery->galleryPhotos as $photo)
                <div class="col-lg-3">
                    <img src="{{ $photo->image }}" class="img-fluid mb-2" alt="white sample" />

                    <button type="submit" class="btn btn-danger" 
                    form="delete-photo-{{ $photo->id }}">X</button>
                </div>
                @endforeach
            </div>

            <div class="row align-items-end mb-4">
                <div class="col">
                    <label for="formAddImg" class="form-label">Tambah Foto Event</label>
                    <input class="form-control" type="file" name="image" id="formAddImg" form="form-add-img">
                </div>

                <button type="submit" class="btn btn-primary d-block" form="form-add-img">Submit Foto</button>
                @error('image')
                    {{ $message }}
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <form action="{{ route('admin.gallery.photo.store', $gallery->id) }}" method="POST" id="form-add-img" 
    enctype="multipart/form-data">
        @csrf
    </form>

    @foreach ($gallery->galleryPhotos as $photo)
    <form action="{{ route('admin.gallery.photo.destroy', $photo->id) }}" method="post" 
        id="delete-photo-{{ $photo->id }}">
        @csrf @method('DELETE')
    </form>
    @endforeach

@endsection