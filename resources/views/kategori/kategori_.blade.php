@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Kategori</li>
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
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#TambahKategori"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</button>
                </div>
                {{-- View, Edit dan Kategori --}}
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Kategori</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Kategori</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kategoris as $kategori)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $kategori->kategori }}</td>
                                    <td class="text-center align-middle">
                                        <button type="button" class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#EditKategori{{ $kategori->id }}"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#HapusKategori{{ $kategori->id }}"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                {{-- Modal Edit Kategori --}}
                                <div class="modal fade" id="EditKategori{{ $kategori->id }}" tabindex="-1"
                                    aria-labelledby="EditKategori" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Kategori</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!--FORM EDIT KATEGORI-->
                                                <form action="/kategori/{{ $kategori->id }}" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="Kategori" class="label-bold">Kategori</label>
                                                        <input type="text"
                                                            class="form-control @error('kategori') is-invalid @enderror"
                                                            id="kategori" name="kategori" aria-describedby="emailHelp"
                                                            required autofocus
                                                            value="{{ old('kategori', $kategori->kategori) }}"
                                                            placeholder="Kategori...">
                                                        @error('kategori')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Edit Data</button>
                                                    </div>
                                                </form>
                                                <!--END EDIT KATEGORI-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal Hapus Kategori --}}
                                <div class="modal fade" id="HapusKategori{{ $kategori->id }}" tabindex="-1"
                                    aria-labelledby="HapusKategori" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="text-center">Apakah anda yakin menghapus kategori
                                                    <span>{{ $kategori->kategori }}</span>
                                                </h5>
                                                <span class="d-flex justify-content-center"><i
                                                        class="bi bi-exclamation-circle"
                                                        style="font-size: 100px"></i></span>
                                                <!--FORM HAPUS KATEGORI-->
                                                <form action="/kategori/{{ $kategori->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="submit"
                                                            class="btn btn-danger d-flex justify-content-center">Ya, Hapus</button>
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                                            aria-label="Close">Batal</button>
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
                {{-- Modal Tambah Kategori --}}
                <div class="modal fade" id="TambahKategori" tabindex="-1" aria-labelledby="TambahKategori"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Kategori</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!--FORM TAMBAH KATEGORI-->
                                <form action="/kategori" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Kategori" class="label-bold">Kategori</label>
                                        <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                            id="kategori" name="kategori" aria-describedby="emailHelp"
                                            placeholder="Kategori..." required autofocus value="{{ old('kategori') }}">
                                        @error('kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </form>
                                <!--END FORM TAMBAH KATEGORI-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('footer.index')
@endsection
