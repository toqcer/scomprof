@extends('layouts.admin')

@section('title', 'Edit Contact Sekolah')

@section('content')
    <form enctype="multipart/form-data" action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label for="teacher_name">Nama Kontak/ Nama Guru</label>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name" required
                    value="{{ $contact->teacher_name }}">

                @error('teacher_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required
                    value="{{ $contact->email }}">

                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="telephone">No. HP</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required
                    value="{{ $contact->telephone }}">

                @error('telephone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

