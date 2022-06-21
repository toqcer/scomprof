@extends('layouts.admin')

@section('title', 'Tambah Karyawan')

@section('content')
    <form enctype="multipart/form-data" action="{{ route('admin.teacher.store') }}" method="POST">
        @csrf
        
        <div class="card-body">
            <div class="form-group">
                <label for="acc_number">Id Pegawai</label>
                <input type="text" class="form-control" id="acc_number" name="acc_number" required>

                @error('acc_number')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>

                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea id="bio" class="form-control" name="bio" data-placeholder="Masukkan Bio disini" required></textarea>

                @error('bio')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="role">Peran / Tugas</label>
                <input type="text" class="form-control" id="role" name="role" required>

                @error('role')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="avatar">avatar</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="avatar" accept="image/*" name="avatar">
                    <label class="custom-file-label" for="avatar">Pilih Gambar</label>
                </div>

                @error('avatar')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

@push('scripts')
@endpush