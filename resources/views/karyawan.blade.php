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
                                <th class="text-center">No</th>
                                <th class="text-center">Divisi</th>
                                <th class="text-center">Team</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Divisi</th>
                                <th class="text-center">Team</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle">Tiger Nixon</td>
                                <td class="text-center align-middle">System Architect</td>
                                <td class="text-center align-middle">System Architect</td>
                                <td class="text-center align-middle">Edinburgh</td>
                                <td class="text-center align-middle">Edinburgh</td>
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
            </div>
            {{-- Modal Tambah Karyawan--}}
            <div class="modal fade" id="modalTambahKaryawan" tabindex="-1" aria-labelledby="modalTambahKaryawan"
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
                                    <label for="" class="label-bold">Nama</label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>--Pilih Nama--</option>
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
    @include('footer.index')
@endsection
