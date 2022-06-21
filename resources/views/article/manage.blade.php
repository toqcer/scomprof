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
                        <th>Cover</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>
                                <button type="button" class="btn btn-primary"
                                data-toggle="modal" data-target="#modal-article-{{ $loop->iteration }}">
                                    Lihat Cover
                                </button>
                            </td>
                            <td>
                                <div class="d-flex" style="gap: 10px">
                                    <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.article.destroy', $article->id) }}" method="post">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ($articles as $article)
    <div class="modal fade" id="modal-article-{{ $loop->iteration }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ $article->cover }}" alt="" srcset="" class="img-fluid">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>    
    @endforeach

@endsection

@push('scripts')
    <script>
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    </script>
@endpush