@extends('layouts/app')
@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* CSS untuk tombol */
        #deleteButton {
            background-color: red; 
            color: white; 
            border: none; 
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer; 
            border-radius: 5px; 
        }
        
        #deleteButton:hover {
            background-color: darkred;
        }
    </style>

    <body id="page-top">
        <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">
                        <h1 class="h3 mb-2 text-gray-800">Table</h1>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">SISFO DEPARTEMEN MOCHAMMAD ALIFAN</h6>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary mb-3" href="{{ route('departemen.create') }}">Tambah Data</a>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Departemen</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($departemen as $dept)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $dept->nama_departemen }}</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary"
                                                           href="{{ url('departemen/' . $dept->kodedepartemen . '/edit') }}">Edit</a>
                                                        <form action="{{ url('departemen/' . $dept->kodedepartemen) }}" method="POST" style="display: inline-block" class="delete-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" id="deleteButton" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });

        document.querySelectorAll('.delete-form').forEach(form => {
            form.querySelector('#deleteButton').addEventListener('click', () => {
                swalWithBootstrapButtons.fire({
                    title: "YAkin BAnG???",
                    text: "kalo di hapus gak bisa balik lagi lohh!",
                    icon: "Peringatan",
                    showCancelButton: true,
                    confirmButtonText: "iya, dihapus!",
                    cancelButtonText: "tidak, gak jadi!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); 
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire({
                            title: "gaJAdI",
                            text: "Knp kM plIN pLAn?",
                            icon: "error"
                        });
                    }
                });
            });
        });
    </script>
@endsection
