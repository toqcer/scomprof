@extends('layouts.admin')

@section('title', 'Feedback User')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center no-after">
            <h3 class="card-title m-0">Feedback User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="tableFeedback" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kritik</th>
                        <th>Saran</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedbacks as $feedback)
                        <tr>
                            <td>{{ $feedback->id }}</td>
                            <td>{{ $feedback->name }}</td>
                            <td>{{ $feedback->email }}</td>
                            <td>{{ $feedback->critique }}</td>
                            <td>{{ $feedback->suggestion }}</td>
                            <td>{{ $feedback->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $("#tableFeedback").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#tableFeedback_wrapper .col-md-6:eq(0)');
    </script>
@endpush