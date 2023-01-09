@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tambah User</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <a href="/user" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/user" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="Nama" class="label-bold">Nama</label>
                                    <div class="input-group">
                                        <select class="form-select" name="karyawan_id">
                                            @foreach ($karyawans as $karyawan)
                                                @if (old('karyawan_id') == $karyawan->id)
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
                                            <option value="user" {{ old('level') === 'user' ? 'selected' : '' }}>User</option>
                                            <option value="teknisi" {{ old('level') === 'teknisi' ? 'selected' : '' }}>Teknisi</option>
                                            <option value="superadmin" {{ old('level') === 'superadmin' ? 'selected' : '' }}>Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="E-mail" class="label-bold label-mt">E-mail</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror " id="email"
                                name="email" aria-describedby="emailHelp" placeholder="E-mail..." required autofocus
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
														
														<label for="Password" class="label-bold label-mt">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                required placeholder="Password...">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

														<label for="Password Confirmation" class="label-bold label-mt">Ulangi Password</label>
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                                required placeholder="Ulangi Password...">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('footer.index')
@endsection
