@extends('layouts.main')
@section('content')
@can('admin')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Knowledge Management</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Knowledge Management</li>
                </ol>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card mb-4">
                    {{-- <div class="card-header">
                        <a href="/pengaduan/create" class="btn btn-success"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</a>
                    </div> --}}
                    <div class="card-body table-responsive">
                        <table id="tabel-data" class="table table-striped table-bordered nowrap" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Masalah</th>
                                    <th class="text-center align-middle">Troubleshooting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduans as $pengaduan)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
																				<td class="text-center align-middle">{{ $pengaduan->masalah }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->penyelesaian }}</td>
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