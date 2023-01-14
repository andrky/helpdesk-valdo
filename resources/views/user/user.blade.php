@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
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
                    <a href="/user/create" class="btn btn-success"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</a>
                </div>
                {{-- View, Edit dan Team --}}
                <div class="card-body table-responsive">
                    <table id="tabel-data" class="table table-striped table-bordered nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Nama</th>
                                <th class="text-center align-middle">Level</th>
                                <th class="text-center align-middle">E-mail</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $user->karyawan->karyawan }}</td>
                                    <td class="text-center align-middle">{{ $user->level }}</td>
                                    <td class="text-center align-middle">{{ $user->email }}</td>
                                    <td class="text-center align-middle">
                                        <a href="/cp/{{ $user->id }}" class="btn btn-info btn-sm me-2"><i
                                                class="bi bi-shield-lock"></i></a>
                                        <a href="/user/{{ $user->id }}/edit" class="btn btn-warning btn-sm me-2"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#Hapususer{{ $user->id }}"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="Hapususer{{ $user->id }}" tabindex="-1"
                                    aria-labelledby="Hapususer" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus User</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="text-center">Apakah anda yakin menghapus User
                                                    <span>{{ $user->karyawan->karyawan }}</span>
                                                </h5>
                                                <span class="d-flex justify-content-center"><i
                                                        class="bi bi-exclamation-circle"
                                                        style="font-size: 100px"></i></span>
                                                <!--FORM HAPUS TEAM-->
                                                <form action="/user/{{ $user->id }}" method="post">
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
                                                <!--END HAPUS TEAM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    @include('footer.index')
@endsection
