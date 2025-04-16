@extends('admin.template.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
                            <li class="breadcrumb-item active">{{ $subtitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $title }}</h3>
                        <a href="{{ route('manage-user.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            User</a>
                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" id="success-alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table id="users-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <a href="{{ route('manage-user.edit', $user->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('manage-user.destroy', $user->id) }}" method="POST"
                                                style="display:inline" class="form-delete-user">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-danger btn-delete-user"
                                                    data-nama="{{ $user->name }}">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <!-- DataTables & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#success-alert").delay(3000).slideUp(300, function() {
                $(this).alert('close');
            });

            $('#users-table').DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                dom: '<"row mb-3"<"col-md-6"B><"col-md-6 d-flex justify-content-end"f>>rt<"row mt-3"<"col-md-6"i><"col-md-6 d-flex justify-content-end"p>>',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print',
                    {
                        extend: 'colvis',
                        className: 'btn btn-secondary',
                        text: 'Column Visibility',
                        columns: ':not(.noVis)'
                    },
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search...",
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).on('click', '.btn-delete-user', function(e) {
        e.preventDefault();
        const form = $(this).closest('form');
        const userNama = $(this).data('nama');

        Swal.fire({
            title: 'Yakin ingin menghapus user ini?',
            text: "User: " + userNama,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit form delete
            }
        });
    });
</script>
$('#scan_barcode').on('input', function() {
    let kode = $(this).val();

    if (kode.length >= 3) {
        $.ajax({
            url: '/produk/get-by-kode/' + kode,
            type: 'GET',
            success: function(res) {
                if (res.status === 'success') {
                    $('#hasil_scan').text("Produk: " + res.nama + " | Harga: " + res.harga + " | Stok: " + res.stok).css("color", "green");
                } else {
                    $('#hasil_scan').text(res.message).css("color", "red");
                }
            },
            error: function(err) {
                $('#hasil_scan').text("Produk tidak ditemukan").css("color", "red");
            }
        });
    }
});

@endsection
