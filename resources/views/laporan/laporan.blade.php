@extends('layouts.main')

@section('content')
    @can('admin')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Laporan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Laporan</li>
                </ol>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="my-2">
                        <form action="/laporan" method="GET">
                            <div class="input-group mb-3">
                                <input type="date" class="form-control ms-3" name="start_date">
                                <input type="date" class="form-control" name="end_date">
                                <button class="btn btn-primary me-3" type="submit">GET</button>
                            </div>
														<a href="/exportlaporan" class="btn btn-success ms-3"></i>Export PDF</a>

                        </form>
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
                                        <td class="text-center align-middle">{{ $pengaduan->user->karyawan->karyawan }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->tgl_proses }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->tgl_selesai }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->penyelesaian }}</td>
                                        <td class="text-center align-middle">
                                            @if ($pengaduan->status == 'open')
                                                <div class="bg-primary rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                            @if ($pengaduan->status == 'progress')
                                                <div class="bg-success rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                            @if ($pengaduan->status == 'close')
                                                <div class="bg-danger rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    @endcan
    @include('footer.index')
@endsection
