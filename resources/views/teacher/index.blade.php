@extends('layouts.admin')

@section('title', 'Semua Pegawai')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center no-after">
            <h3 class="card-title m-0">Guru Dan Karyawan</h3>
            <a href="{{ route('admin.teacher.create') }}" class="btn btn-primary">
                Tambah Guru dan Karyawan
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id Pegawai</th>
                        <th>Nama</th>
                        <th>Bio</th>
                        <th>Peran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->acc_number }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->bio }}</td>
                            <td>{{ $teacher->role }}</td>
                            <td>
                                <div class="d-flex" style="gap: 10px">
                                    <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="post">
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
@endsection

@push('scripts')
    <script>
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    </script>
@endpush