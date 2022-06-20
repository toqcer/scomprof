@extends('layouts.admin')

@section('title', 'Profile Sekolah')

@section('content')
<div class="card card-primary">
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="total_student">Total Student</label>
                <input type="number" class="form-control" id="total_student" name="total_student">
            </div>
            <div class="form-group">
                <label for="desc">desc</label>
                <textarea class="form-control" rows="3" name="desc" placeholder="Masukkan deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Nama Sekolah</label>
                <input type="number" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                @foreach ($statusList as $status)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status">
                        <label class="form-check-label">{{ $status }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="total_student">Total Student</label>
                <input type="number" class="form-control" id="total_student" name="total_student">
            </div>
            <div class="form-group">
                <label for="total_student">Total Student</label>
                <input type="number" class="form-control" id="total_student" name="total_student">
            </div>
            <div class="form-group">
                <label for="total_student">Total Student</label>
                <input type="number" class="form-control" id="total_student" name="total_student">
            </div>
            <div class="form-group">
                <label for="total_student">Total Student</label>
                <input type="number" class="form-control" id="total_student" name="total_student">
            </div>
        </div>
    </form>
</div>
@endsection