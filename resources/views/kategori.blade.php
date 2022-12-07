@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#modalTambahKategori"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</button>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Kategori</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Kategori</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle">Tiger Nixon</td>
                                <td class="text-center align-middle">System Architect</td>
                                <td class="text-center align-middle">
                                    <button type="button" class="btn btn-warning btn-sm me-2"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- Modal Tambah Kategori--}}
                <div class="modal fade" id="modalTambahKategori" tabindex="-1" aria-labelledby="modalTambahKategori"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Kategori</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!--FORM TAMBAH KATEGORI-->
                                <form action="" method=" ">
                                    <div class="form-group">
                                        <label for="" class="label-bold">Kategori</label>
                                        <input type="text" class="form-control" id="addNamaBarang" name="addNamaBarang"
                                            aria-describedby="emailHelp" placeholder="Kategori...">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </form>
                                <!--END FORM TAMBAH KATEGORI-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('footer.index')
@endsection
