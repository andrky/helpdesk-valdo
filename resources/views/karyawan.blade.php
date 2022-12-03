@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Karyawan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Karyawan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#modalTambahKaryawan"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</button>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Divisi</th>
                                <th>Team</th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Divisi</th>
                                <th>Team</th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
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
            <div class="modal fade" id="modalTambahKaryawan" tabindex="-1" aria-labelledby="modalTambahDivisi"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Karyawan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--FORM TAMBAH KARYYAWAN-->
                            <form action="" method=" ">
                                <div class="form-group">
                                    <label for="" class="label-bold">Divisi</label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>--Pilih Divisi--</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-bold">Team</label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>--Pilih Team--</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-bold">Nama Karyawan</label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>--Pilih Nama Karyawan--</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-bold">Jabatan</label>
                                    <input type="text" class="form-control" id="addJumlahBarang" name="addJumlahBarang" placeholder="Jabatan...">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </form>
                            <!--END FORM TAMBAH KARYYAWAN-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footer.index')
@endsection
