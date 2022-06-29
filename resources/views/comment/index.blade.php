@extends('layouts.admin')

@section('title', 'Semua Article')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center no-after">
            <h3 class="card-title m-0">Komentar</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Article</th>
                        <th>Content</th>
                        <th>Tampilkan</th>
                        <th>Created At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->article->title }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->is_show ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <form action="{{ route('admin.comment.update', $item->id) }}" method="post">
                                    @csrf @method('PUT')
                                    @if (! $item->is_show)
                                        <button type="submit" class="btn btn-info btn-block btn-sm mb-2" name="visibility" value="show">
                                            Tampilkan
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-primary btn-block btn-sm mb-2" name="visibility" value="hide">
                                            Sembunyikan
                                        </button>
                                    @endif
                                </form>
                                <form action="{{ route('admin.comment.destroy', $item->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger  btn-block btn-sm mb-2">
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