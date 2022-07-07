@extends('layouts.admin')

@section('title', 'Tambah Article')

@section('content')
    <form enctype="multipart/form-data" action="{{ route('admin.article.store') }}" method="POST">
        @csrf
        
        <div class="card-body">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>

                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="summernote">Konten</label>
                <textarea id="summernote" class="form-control" rows="10" name="content" data-placeholder="Masukkan konten disini"></textarea>

                @error('content')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="cover">Cover</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="cover" accept="image/*" name="cover">
                    <label class="custom-file-label" for="cover">Pilih Gambar</label>
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