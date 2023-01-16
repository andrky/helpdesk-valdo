@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pengaduan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pengaduan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <a href="/pengaduan/create" class="btn btn-success"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</a>
                </div>
                <div class="card-body table-responsive">
                    <table id="tabel-data" class="table table-striped table-bordered nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Pelapor</th>
                                <th class="text-center align-middle">Divisi</th>
                                <th class="text-center align-middle">Team</th>
                                <th class="text-center align-middle">Kategori</th>
                                <th class="text-center align-middle">Masalah</th>
                                <th class="text-center align-middle">Tanggal Pengaduan</th>
                                <th class="text-center align-middle">Teknisi</th>
                                <th class="text-center align-middle">Tanggal Proses</th>
                                <th class="text-center align-middle">Tanggal Selesai</th>
                                <th class="text-center align-middle">Troubleshooting</th>
                                <th class="text-center align-middle">Status</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduans as $pengaduan)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $pengaduan->karyawan->karyawan }}</td>
                                    <td class="text-center align-middle">{{ $pengaduan->divisi->divisi }}</td>
                                    <td class="text-center align-middle">{{ $pengaduan->team->team }}</td>
                                    <td class="text-center align-middle">{{ $pengaduan->kategori->kategori }}</td>
                                    <td class="text-center align-middle">{{ $pengaduan->masalah }}</td>
                                    <td class="text-center align-middle">{{ $pengaduan->created_at }}</td>
                                    <td class="text-center align-middle">{{ $pengaduan->teknisi }}</td>
                                    <td class="text-center align-middle"></td>
                                    <td class="text-center align-middle"></td>
                                    <td class="text-center align-middle">{{ $pengaduan->penyelesaian }}</td>
                                    <td class="text-center align-middle">
                                        <div class="bg-primary rounded-3 py-1 text-white" style="font-size: 10px">
                                            {{ $pengaduan->status }}
                                        </div>
                                        {{-- <button type="button" class="btn btn-success btn-sm mb-2" style="font-size:10px">Close</button></button> --}}
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-warning btn-sm me-2"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                        {{-- <a href="#" class="badge bg-warning fs-6 me-2"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="#" class="badge bg-danger fs-6"><i class="bi bi-trash"></i></a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Modal Tambah Pengaduan --}}
            <div class="modal fade" id="modalTambahPengaduan" tabindex="-1" aria-labelledby="modalTambahPengaduan"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Pengaduan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--FORM TAMBAH Pengaduan-->
                            <form action="" method=" ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="label-bold">Nama</label>
                                                <input type="text" class="form-control" id="addNamaBarang"
                                                    name="addNamaBarang" aria-describedby="emailHelp" placeholder="Nama..."
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="label-bold">Divisi</label>
                                                <input type="text" class="form-control" id="addNamaBarang"
                                                    name="addNamaBarang" aria-describedby="emailHelp"
                                                    placeholder="Divisi..." disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="label-bold">Team</label>
                                                <input type="text" class="form-control" id="addNamaBarang"
                                                    name="addNamaBarang" aria-describedby="emailHelp" placeholder="Nama..."
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="label-bold">Kategori</label>
                                                <div class="input-group">
                                                    <select class="form-select" id="inputGroupSelect01">
                                                        <option selected>--Pilih Kategori--</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="label-bold">Teknisi</label>
                                                <div class="input-group">
                                                    <select class="form-select" id="inputGroupSelect01">
                                                        <option selected>--Pilih Teknisi--</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" class="label-bold">Keterangan</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="formFile" class="label-bold">Gambar</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </form>
                            <!--END FORM TAMBAH Pengaduan-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('footer.index')
@endsection
