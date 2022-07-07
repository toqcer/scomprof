@extends('layouts.admin')

@section('title', 'Edit Article')

@section('content')
    <form enctype="multipart/form-data" action="{{ route('admin.article.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ $article->title }}">

                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="summernote">Konten</label>
                <textarea id="summernote" rows="10" class="form-control" name="content" data-placeholder="Masukkan konten disini">{{ $article->content }} </textarea>

                @error('content')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="cover">Cover</label>
                <img src="{{$article->cover ?? ''}}" class="d-block my-2">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="cover" accept="image/*" name="cover">
                    <label class="custom-file-label" for="cover">Pilih Gambar Baru</label>
                </div>
                
                @error('cover')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

@push('scripts')
@endpush