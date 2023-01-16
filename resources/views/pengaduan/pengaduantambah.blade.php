@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Pengaduan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tambah Pengaduan</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <a href="/pengaduan" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/pengaduan" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="Pelapor" class="label-bold">Pelapor</label>
                                    <div class="input-group">
                                        <select class="form-select" name="divisi_id">
                                            @foreach ($divisis as $divisi)
                                                @if (old('divisi_id') == $divisi->id)
                                                    <option value="{{ $divisi->id }}" selected>
                                                        {{ $divisi->divisi }}
                                                    </option>
                                                @else
                                                    <option value="{{ $divisi->id }}">
                                                        {{ $divisi->divisi }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="Divisi" class="label-bold">Divisi</label>
                                    <div class="input-group">
                                        <select class="form-select" name="team_id">
                                            @foreach ($teams as $team)
                                                @if (old('team_id') == $team->id)
                                                    <option value="{{ $team->id }}" selected>
                                                        {{ $team->team }}
                                                    </option>
                                                @else
                                                    <option value="{{ $team->id }}">
                                                        {{ $team->team }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="Team" class="label-bold label-mt">Team</label>
                                    <div class="input-group">
                                        <select class="form-select" name="divisi_id">
                                            @foreach ($divisis as $divisi)
                                                @if (old('divisi_id') == $divisi->id)
                                                    <option value="{{ $divisi->id }}" selected>
                                                        {{ $divisi->divisi }}
                                                    </option>
                                                @else
                                                    <option value="{{ $divisi->id }}">
                                                        {{ $divisi->divisi }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="Kategori" class="label-bold label-mt">Kategori</label>
                                    <div class="input-group">
                                        <select class="form-select" name="team_id">
                                            @foreach ($teams as $team)
                                                @if (old('team_id') == $team->id)
                                                    <option value="{{ $team->id }}" selected>
                                                        {{ $team->team }}
                                                    </option>
                                                @else
                                                    <option value="{{ $team->id }}">
                                                        {{ $team->team }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="Teknisi" class="label-bold label-mt">Teknisi</label>
                                    <div class="input-group">
                                        <select class="form-select" name="team_id">
                                            @foreach ($teams as $team)
                                                @if (old('team_id') == $team->id)
                                                    <option value="{{ $team->id }}" selected>
                                                        {{ $team->team }}
                                                    </option>
                                                @else
                                                    <option value="{{ $team->id }}">
                                                        {{ $team->team }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="Masalah" class="label-bold label-mt">Masalah</label>
                            <textarea name="masalah" id="masalah" class="form-control @error('pengaduan') is-invalid @enderror "
                                placeholder="Masalah..." required autofocus value="{{ old('pengaduan') }}">
														</textarea>
                            @error('masalah')
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
