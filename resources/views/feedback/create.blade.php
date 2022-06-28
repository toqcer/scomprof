@extends('layouts.master')

@section('content')
    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>{{ config('app.name') }}</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Kritik & Saran</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="se-001">
        <div class="container">
            <h1 class="mb-5 text-center">Form Kritik & Saran</h1>
            <form action="{{ route('feedback.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                </div>
                <div class="form-group">
                    <label for="critique">Kritik</label>
                    <textarea class="form-control" id="critique" rows="6" name="critique"></textarea>
                </div>
                <div class="form-group">
                    <label for="suggestion">Saran</label>
                    <textarea class="form-control" id="suggestion" rows="6" name="suggestion"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
