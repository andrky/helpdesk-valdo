@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahUser"><i
                            class="bi bi-plus-lg pe-2"></i>Tambah Data</button>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Level</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Level</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td class="text-center">Nama</td>
                                <td class="text-center">System Architect</td>
                                <td class="text-center">System Architect</td>
                                <td class="text-center">System Architect</td>
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
            {{-- Modal Tambah User --}}
            <div class="modal fade" id="modalTambahUser" tabindex="-1" aria-labelledby="modalTambahUser"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--FORM TAMBAH KARYYAWAN-->
                            <form action="" method=" ">
                                <div class="form-group">
                                    <label for="" class="label-bold">Nama</label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Nama...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-bold">E-mail</label>
                                    <input class="form-control" name="email" id="email" type="email"
                                        placeholder="name@example.com" />
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-bold">Password</label>
                                    <div class="input-group">
                                        <input class="form-control" name="password" id="password" type="password"
                                            placeholder="Password..." />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-bold">Level</label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option value="1">Admin</option>
                                            <option value="2">Staff</option>
                                            <option value="3">Teknisi</option>
                                        </select>
                                    </div>
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
