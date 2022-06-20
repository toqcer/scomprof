@extends('layouts.admin')

@section('title', 'Semua Article')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center no-after">
            <h3 class="card-title m-0">Artikel dan berita</h3>
            <a href="{{ route('admin.article.create') }}" class="btn btn-primary">
                Tambah Article Baru
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ Str::limit($article->content, 30) }}</td>
                            <td>
                                <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-primary">
                                    Edit
                                </a>
                                <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">
                                    Lihat
                                </a>
                                <form action="{{ route('admin.article.destroy', $article->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button type="button" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    </script>
@endpush