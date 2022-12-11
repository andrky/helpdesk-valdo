@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Divisi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Divisi</li>
            </ol>

            {{-- Notif berhasil tambah kategori --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-header">
                    <a href="/divisi/create" class="btn btn-success"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</a>
                </div>
                {{-- View, Edit dan Divisi --}}
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Divisi</th>
                                <th class="text-center align-middle">Team</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Divisi</th>
                                <th class="text-center align-middle">Team</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($divisis as $divisi)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $divisi->divisi }}</td>
                                    <td class="text-center align-middle">{{ $divisi->team }}</td>
                                    <td class="text-center align-middle">
                                        <a href="/divisi/{{ $divisi->id }}/edit" class="btn btn-warning btn-sm me-2"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#HapusDivisi{{ $divisi->id }}"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
																<div class="modal fade" id="HapusDivisi{{ $divisi->id }}" tabindex="-1"
                                    aria-labelledby="HapusDivisi" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Divisi</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="text-center">Apakah anda yakin menghapus Divisi
                                                    <span>{{ $divisi->divisi }} Team {{ $divisi->team }}</span>
                                                </h5>
                                                <span class="d-flex justify-content-center"><i
                                                        class="bi bi-exclamation-circle"
                                                        style="font-size: 100px"></i></span>
                                                <!--FORM HAPUS KATEGORI-->
                                                <form action="/divisi/{{ $divisi->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="submit"
                                                            class="btn btn-danger d-flex justify-content-center">Ya,
                                                            Hapus</button>
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal" aria-label="Close">Batal</button>
                                                    </div>
                                                </form>
                                                <!--END HAPUS KATEGORI-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
