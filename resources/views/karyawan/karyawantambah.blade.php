@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Karyawan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tambah Karyawan</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <a href="/karyawan" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/karyawan" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="Divisi" class="label-bold">Divisi</label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect04"
                                            aria-label="Example select with button addon">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="Team" class="label-bold">Team</label>
                                    <div class="input-group" >
                                        <select class="form-select" id="inputGroupSelect04"
                                            aria-label="Example select with button addon">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="Divisi" class="label-bold label-mt">Nama</label>
                            <input type="text" class="form-control @error('divisi') is-invalid @enderror " id="divisi"
                                name="divisi" aria-describedby="emailHelp" placeholder="Nama..." required autofocus
                                value="{{ old('divisi') }}">
                            @error('divisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="Divisi" class="label-bold label-mt">Jabatan</label>
                            <input type="text" class="form-control  @error('team') is-invalid @enderror " id="team"
                                name="team" aria-describedby="emailHelp" placeholder="Jabatan..." required autofocus
                                value="{{ old('team') }}">
                            @error('team')
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
