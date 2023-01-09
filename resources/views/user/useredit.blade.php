@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit User</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <a href="/user" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/user/{{ $users->id }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="Nama" class="label-bold">Nama</label>
                                    <div class="input-group">
                                        <select class="form-select" name="karyawan_id">
                                            @foreach ($karyawans as $karyawan)
                                                @if (old('karyawan_id', $users->karyawan_id) == $karyawan->id)
                                                    <option value="{{ $karyawan->id }}" selected>
                                                        {{ $karyawan->karyawan }}
                                                    </option>
                                                @else
                                                    <option value="{{ $karyawan->id }}">
                                                        {{ $karyawan->karyawan }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="Level" class="label-bold">Level</label>
                                    <div class="input-group">
                                        <select class="form-select" name="level">
                                            <option value="user" {{ $users->level == 'user' ? 'selected' : '' }}>User
                                            </option>
                                            <option value="teknisi" {{ $users->level == 'teknisi' ? 'selected' : '' }}>
                                                Teknisi</option>
                                            <option value="superadmin"
                                                {{ $users->level == 'superadmin' ? 'selected' : '' }}>Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="E-mail" class="label-bold label-mt">E-mail</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror " id="email"
                                name="email" aria-describedby="emailHelp" placeholder="E-mail..." required autofocus
                                value="{{ old('email', $users->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('footer.index')
@endsection
