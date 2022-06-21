@extends('layouts.admin')

@section('title', 'Edit Profile Sekolah')

@section('content')
    <form enctype="multipart/form-data" action="{{ route('admin.profile.update', $profile->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama Sekolah</label>
                <input type="text" class="form-control" id="name" name="name" required
                    value="{{ $profile->name }}">

                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="desc">Deskripsi Sekolah</label>
                <textarea id="desc" class="form-control" name="desc" data-placeholder="Masukkan deskripsi sekolah disini" required>{{ $profile->desc }}</textarea>

                @error('desc')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">address</label>
                <textarea id="address" class="form-control" name="address" data-placeholder="Masukkan alamat sekolah disini" required>{{ $profile->address }}</textarea>

                @error('address')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="vision">vision</label>
                <textarea id="vision" class="form-control" name="vision" data-placeholder="Masukkan deskripsi sekolah disini" required>{{ $profile->vision }}</textarea>

                @error('vision')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="mission">mission</label>
                <textarea id="mission" class="form-control" name="mission" data-placeholder="Masukkan deskripsi sekolah disini" required>{{ $profile->mission }}</textarea>

                @error('mission')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="build_at">Tanggal Berdiri</label>
                <input type="date" class="form-control" id="build_at" name="build_at" required
                    value="{{ $profile->build_at }}">

                @error('build_at')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="total_student">Total Murid</label>
                <input type="number" class="form-control" id="total_student" name="total_student" required
                    value="{{ $profile->total_student }}">

                @error('total_student')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status Sekolah</label>
                <select class="form-control" id="status" name="status" required
                    value="{{ $profile->status }}">
                    <option value="swasta">swasta</option>
                    <option value="negeri">negeri</option>
                </select>

                @error('status')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="accreditation">Akreditasi</label>
                <select class="form-control" id="accreditation" name="accreditation" required
                    value="{{ $profile->accreditation }}">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>

                @error('accreditation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

