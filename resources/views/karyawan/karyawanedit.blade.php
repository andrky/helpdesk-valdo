@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Karyawan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Karyawan</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <a href="/karyawan" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/karyawan/{{ $karyawans->id }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="Divisi" class="label-bold">Divisi</label>
                                    <div class="input-group">
                                        <select class="form-select" name="divisi_id">
                                            @foreach ($divisis as $divisi)
                                                @if (old('divisi_id', $karyawans->divisi_id) == $divisi->id)
                                                    <option value="{{ $divisi->id }}" selected>{{ $divisi->divisi }}
                                                    </option>
                                                @else
                                                    <option value="{{ $divisi->id }}">{{ $divisi->divisi }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="Team" class="label-bold">Team</label>
                                    <div class="input-group">
                                        <select class="form-select" name="team_id">
                                            @foreach ($teams as $team)
                                                @if (old('team_id', $karyawans->team_id) == $team->id)
                                                    <option value="{{ $team->id }}" selected>{{ $team->team }}
                                                    </option>
                                                @else
                                                    <option value="{{ $team->id }}">{{ $team->team }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="Karyawan" class="label-bold label-mt">Karyawan</label>
                            <input type="text" class="form-control @error('karyawan') is-invalid @enderror "
                                id="karyawan" name="karyawan" aria-describedby="emailHelp" placeholder="Karyawan..."
                                required autofocus value="{{ old('karyawan', $karyawans->karyawan) }}">
                            @error('karyawan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="Karyawan" class="label-bold label-mt">Jabatan</label>
                            <input type="text" class="form-control  @error('team') is-invalid @enderror " id="jabatan"
                                name="jabatan" aria-describedby="emailHelp" placeholder="Team..." required autofocus
                                value="{{ old('karyawan', $karyawans->jabatan) }}">
                            @error('jabatan')
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
