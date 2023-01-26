@extends('layouts.main')

@section('content')
    @can('admin')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Edit Pengaduan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Edit Pengaduan</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <a href="/pengaduan" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/pengaduan/{{ $pengaduans->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="Pelapor" class="label-bold">Pelapor</label>
                                        <div class="input-group">
                                            <select class="form-select" name="karyawan_id">
                                                @foreach ($karyawans as $karyawan)
                                                    @if (old('karyawan_id', $pengaduans->karyawan_id) == $karyawan->id)
                                                        <option value="{{ $karyawan->id }}" selected>
                                                            {{ $karyawan->karyawan->karyawan }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $karyawan->id }}">
                                                            {{ $karyawan->karyawan->karyawan }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="Divisi" class="label-bold">Divisi</label>
                                        <div class="input-group">
                                            <select class="form-select" name="divisi_id">
                                                @foreach ($divisis as $divisi)
                                                    @if (old('divisi_id', $pengaduans->divisi_id) == $divisi->id)
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
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="Team" class="label-bold label-mt">Team</label>
                                        <div class="input-group">
                                            <select class="form-select" name="team_id">
                                                @foreach ($teams as $team)
                                                    @if (old('team_id', $pengaduans->team_id) == $team->id)
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
                                    <div class="col">
                                        <label for="Kategori" class="label-bold label-mt">Kategori</label>
                                        <div class="input-group">
                                            <select class="form-select" name="kategori_id">
                                                @foreach ($kategoris as $kategori)
                                                    @if (old('kategori_id', $pengaduans->kategori_id) == $kategori->id)
                                                        <option value="{{ $kategori->id }}" selected>
                                                            {{ $kategori->kategori }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $kategori->id }}">
                                                            {{ $kategori->kategori }}</option>
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
                                            <select class="form-select" name="user_id">
                                                @foreach ($teknisis as $teknisi)
                                                    @if (old('user_id', $pengaduans->user_id) == $teknisi->id)
                                                        <option value="{{ $teknisi->id }}" selected>
                                                            {{ $teknisi->karyawan->karyawan }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $teknisi->id }}">
                                                            {{ $teknisi->karyawan->karyawan }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="Level" class="label-bold label-mt">Status</label>
                                        <div class="input-group">
                                            <select class="form-select" name="status">
                                                <option value="open" {{ $pengaduans->status == 'open' ? 'selected' : '' }}>
                                                    Open</option>
                                                <option value="progress"
                                                    {{ $pengaduans->status == 'progress' ? 'selected' : '' }}>Progress</option>
                                                <option value="close" {{ $pengaduans->status == 'close' ? 'selected' : '' }}>
                                                    Close</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="Masalah" class="label-bold label-mt">Masalah</label>
                                        <textarea name="masalah" id="masalah" class="form-control @error('masalah') is-invalid @enderror "
                                            placeholder="Masalah..." required>{{ old('masalah', $pengaduans->masalah) }}</textarea>
                                        @error('masalah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col">
                                        <label for="Penyelesaian" class="label-bold label-mt">Penyelesaian</label>
                                        <textarea name="penyelesaian" id="penyelesaian" class="form-control @error('penyelesaian') is-invalid @enderror "
                                            placeholder="Penyelesaian..." required>-</textarea>
                                        @error('penyelesaian')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col">
                                        <label for="Tanggal Proses" class="label-bold label-mt">Tanggal Proses</label>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control @error('tgl_proses') is-invalid @enderror " id="tgl_proses"
                                                name="tgl_proses" aria-describedby="emailHelp" readonly value="-">
                                            @error('tgl_proses')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row d-none">
                                        <div class="col">
                                            <label for="Tanggal Selesai" class="label-bold label-mt">Tanggal Selesai</label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control @error('tgl_selesai') is-invalid @enderror "
                                                    id="tgl_selesai" name="tgl_selesai" aria-describedby="emailHelp" readonly
                                                    value="-">
                                                @error('tgl_selesai')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="Penyelesaian" class="label-bold label-mt"></label>
                                    <input type="hidden" id="penyelesaian" name="penyelesaian" value="-" />
                                    <label for="Penyelesaian" class="label-bold label-mt"></label>
                                    <input type="hidden" id="tgl_proses" name="tgl_proses" value="-" />
                                    <label for="Penyelesaian" class="label-bold label-mt"></label>
                                    <input type="hidden" id="tgl_selesai" name="tgl_selesai" value="-" /> --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Edit Data</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    @elsecan('teknisi')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Konfirmasi Pengerjaan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Konfirmasi Pengerjaan</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <a href="/pengaduan" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/pengaduan/{{ $pengaduans->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <div class="row d-none">
                                    <div class="col">
                                        <label for="Pelapor" class="label-bold">Pelapor</label>
                                        <div class="input-group">
                                            <select class="form-select" name="karyawan_id">
                                                @foreach ($karyawans as $karyawan)
                                                    @if (old('karyawan_id', $pengaduans->karyawan_id) == $karyawan->id)
                                                        <option value="{{ $karyawan->id }}" selected>
                                                            {{ $karyawan->karyawan->karyawan }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $karyawan->id }}">
                                                            {{ $karyawan->karyawan->karyawan }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="Divisi" class="label-bold">Divisi</label>
                                        <div class="input-group">
                                            <select class="form-select" name="divisi_id">
                                                @foreach ($divisis as $divisi)
                                                    @if (old('divisi_id', $pengaduans->divisi_id) == $divisi->id)
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
                                </div>
                                <div class="row d-none">
                                    <div class="col">
                                        <label for="Team" class="label-bold label-mt">Team</label>
                                        <div class="input-group">
                                            <select class="form-select" name="team_id">
                                                @foreach ($teams as $team)
                                                    @if (old('team_id', $pengaduans->team_id) == $team->id)
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
                                    <div class="col">
                                        <label for="Kategori" class="label-bold label-mt">Kategori</label>
                                        <div class="input-group">
                                            <select class="form-select" name="kategori_id">
                                                @foreach ($kategoris as $kategori)
                                                    @if (old('kategori_id', $pengaduans->kategori_id) == $kategori->id)
                                                        <option value="{{ $kategori->id }}" selected>
                                                            {{ $kategori->kategori }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $kategori->id }}">
                                                            {{ $kategori->kategori }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col">
                                        <label for="Teknisi" class="label-bold label-mt">Teknisi</label>
                                        <div class="input-group">
                                            <select class="form-select" name="user_id">
                                                @foreach ($teknisis as $teknisi)
                                                    @if (old('user_id', $pengaduans->user_id) == $teknisi->id)
                                                        <option value="{{ $teknisi->id }}" selected>
                                                            {{ $teknisi->karyawan->karyawan }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $teknisi->id }}">
                                                            {{ $teknisi->karyawan->karyawan }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="Level" class="label-bold label-mt">Status</label>
                                        <div class="input-group">
                                            <select class="form-select" name="status">
                                                <option value="progress">Progress</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col">
                                        <label for="Masalah" class="label-bold label-mt">Masalah</label>
                                        <textarea name="masalah" id="masalah" class="form-control @error('masalah') is-invalid @enderror "
                                            placeholder="Masalah..." required>{{ old('masalah', $pengaduans->masalah) }}</textarea>
                                        @error('masalah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col">
                                        <label for="Penyelesaian" class="label-bold label-mt">Penyelesaian</label>
                                        <textarea name="penyelesaian" id="penyelesaian" class="form-control @error('penyelesaian') is-invalid @enderror "
                                            placeholder="Penyelesaian..." required>-</textarea>
                                        @error('penyelesaian')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col">
                                        <label for="Tanggal Proses" class="label-bold label-mt">Tanggal Proses</label>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control @error('tgl_proses') is-invalid @enderror "
                                                id="tgl_proses" name="tgl_proses" aria-describedby="emailHelp" readonly
                                                value="{{ $tgl_proses }}">
                                            @error('tgl_proses')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row d-none">
                                        <div class="col">
                                            <label for="Tanggal Selesai" class="label-bold label-mt">Tanggal Selesai</label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control @error('tgl_selesai') is-invalid @enderror "
                                                    id="tgl_selesai" name="tgl_selesai" aria-describedby="emailHelp" readonly
                                                    value="-">
                                                @error('tgl_selesai')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="Penyelesaian" class="label-bold label-mt"></label>
                                <input type="hidden" id="penyelesaian" name="penyelesaian" value="-" />
                                <label for="Penyelesaian" class="label-bold label-mt"></label>
                                <input type="hidden" id="tgl_proses" name="tgl_proses" value="{{ $tgl_proses }}" />
                                <label for="Penyelesaian" class="label-bold label-mt"></label>
                                <input type="hidden" id="tgl_selesai" name="tgl_selesai" value="-" /> --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Konfirmasi Penyelesaian</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    @endcan
    @include('footer.index')
@endsection
