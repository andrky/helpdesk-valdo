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
                                <th>#</th>
                                <th>Nama Karyawan</th>
                                <th>E-mail</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama Karyawan</th>
                                <th>E-mail</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Nama Karyawan</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
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
            <div class="modal fade" id="modalTambahUser" tabindex="-1" aria-labelledby="modalTambahDivisi"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Divisi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--FORM TAMBAH KARYYAWAN-->
                            <form action="" method=" ">
                                <div class="form-group">
                                    <label for="" class="label-bold">Nama Karyawan</label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Nama Karyawan...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
																	<label for="" class="label-bold">E-mail</label>
																	<input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" />
                                </div>
                                <div class="form-group">
																	<label for="" class="label-bold">Password</label>
																	<div class="input-group">
																		<input class="form-control" name="password" id="password" type="password" placeholder="Password" />
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
    @include('layouts.footer.index')
@endsection
