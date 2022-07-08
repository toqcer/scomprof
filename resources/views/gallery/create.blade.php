@extends('layouts.admin')

@section('title', 'Tambah Gallery')

@section('content')
    <form enctype="multipart/form-data" action="{{ route('admin.gallery.store') }}" method="POST">
        @csrf
        
        <div class="card-body">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="event_at">Tanggal Event</label>
                <input type="date" class="form-control" id="event_at" name="event_at" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" rows="4" name="description" 
                class="form-control" required></textarea>
            </div>

            <div class="row align-items-end mb-4">
                <div class="col">
                    <label for="formAddImg" class="form-label">Tambah Foto Event</label>
                    <input class="form-control" type="file" name="image" id="formAddImg" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

@push('scripts')
    <script>
        $('#summernote').summernote({
            height: 200,
            placeholder: $(this).data('placeholder')
        })
    </script>
@endpush