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
                                <th class="text-center">No</th>
                                <th class="text-center">Divisi</th>
                                <th class="text-center">Team</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Divisi</th>
                                <th class="text-center">Team</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td class="text-center">Tiger Nixon</td>
                                <td class="text-center">System Architect</td>
                                <td class="text-center">Edinburgh</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-warning btn-sm me-2"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Modal Tambah Divisi--}}
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
                                    <input type="text" class="form-control" id="addJumlahBarang" name="addJumlahBarang"
                                        placeholder="Team...">
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
