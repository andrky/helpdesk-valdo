@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Divisi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Divisi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahDivisi"><i
                            class="bi bi-plus-lg pe-2"></i>Tambah Data</button>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Divisi</th>
                                <th>Team</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Divisi</th>
                                <th>Team</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <a href="#" class="badge bg-warning fs-6 me-2"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="#" class="badge bg-danger fs-6"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Modal --}}
            <div class="modal fade" id="modalTambahDivisi" tabindex="-1" aria-labelledby="modalTambahDivisi"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Divisi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--FORM TAMBAH DIVISI-->
                            <form action="" method=" ">
                                <div class="form-group">
                                    <label for="" class="label-bold">Divisi</label>
                                    <input type="text" class="form-control" id="addNamaBarang" name="addNamaBarang"
                                        aria-describedby="emailHelp" placeholder="Divisi...">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-bold">Team</label>
                                    <input type="text" class="form-control" id="addJumlahBarang" name="addJumlahBarang" placeholder="Team...">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </form>
                            <!--END FORM TAMBAH Divisi-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
