@extends('layouts.master')

@section('title', $article->title)

@section('content')
    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>{{ $article->title }}</h2>
                        <p><a href="/" class="text-white">Home</a> <i
                                class="fas fa-angle-right"></i><span>{{ $article->title }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-04">
        <div class="container">
            <h1>{{ $article->title }}</h1>
            <p class="mb-4 text-secondary font-italic">dibuat pada {{ $article->created_at }}</p>
            <img src="{{ $article->cover }}" alt="" class="d-block mb-3 mx-auto">
            <div class="mb-5 text-justify">
                {!! $article->content !!}
            </div>
            <hr>
            <div class="row mt-5 justify-content-between">
                <div class="col-lg-4">
                    <div class="bg-info rounded-lg p-3 text-white">
                        <h5>Berikan Komentar</h5>
                        <form action="{{ route('article.comment.store', $article->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="nama" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="name@example.com" name="email">
                            </div>
                            <div class="form-group">
                                <label for="content">Pesan</label>
                                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="text-secondary mb-2 text-italic">{{$article->comments->where('is_show', true)->count()}} Jumlah Komentar</p>
                    @forelse ($article->comments as $comment)
                        @if ($comment->is_show)
                            <div class="bg-white shadow-lg px-3 py-2 mb-3">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-1">{{$comment->name}}</h5>
                                    <p class="text-secondary font-italic">{{ $comment->created_at }}</p>
                                </div>
                                <p class="text-secondary mb-2 font-italic">{{ $comment->email }}</p>
                                <p>"{{$comment->content}}"</p>
                            </div>
                        @endif
                    @empty
                        Artikel ini Belum memiliki Komentar
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
