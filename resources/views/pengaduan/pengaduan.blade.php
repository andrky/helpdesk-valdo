@extends('layouts.main')

@section('content')
    @can('admin')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Pengaduan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pengaduan</li>
                </ol>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        <a href="/pengaduan/create" class="btn btn-success"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="tabel-data" class="table table-striped table-bordered nowrap" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Pelapor</th>
                                    <th class="text-center align-middle">Divisi</th>
                                    <th class="text-center align-middle">Team</th>
                                    <th class="text-center align-middle">Kategori</th>
                                    <th class="text-center align-middle">Masalah</th>
                                    <th class="text-center align-middle">Tanggal Pengaduan</th>
                                    <th class="text-center align-middle">Teknisi</th>
                                    <th class="text-center align-middle">Tanggal Proses</th>
                                    <th class="text-center align-middle">Tanggal Selesai</th>
                                    <th class="text-center align-middle">Troubleshooting</th>
                                    <th class="text-center align-middle">Status</th>
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduans as $pengaduan)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->karyawan->karyawan }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->divisi->divisi }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->team->team }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->kategori->kategori }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->masalah }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->created_at }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->user->karyawan->karyawan }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->tgl_proses }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->tgl_selesai }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->penyelesaian }}</td>
                                        <td class="text-center align-middle">
                                            @if ($pengaduan->status == 'open')
                                                <div class="bg-primary rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                            @if ($pengaduan->status == 'progress')
                                                <div class="bg-success rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                            @if ($pengaduan->status == 'close')
                                                <div class="bg-danger rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="/pengaduan/{{ $pengaduan->id }}/edit"
                                                class="btn btn-warning btn-sm me-2"><i class="bi bi-pencil-square"></i></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#HapusPengaduan{{ $pengaduan->id }}"><i
                                                    class="bi bi-trash"></i></button>
                                    </tr>
                                    {{-- Modal Hapus Pengaduan --}}
                                    <div class="modal fade" id="HapusPengaduan{{ $pengaduan->id }}" tabindex="-1"
                                        aria-labelledby="HapusPengaduan" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Pengaduan</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="text-center">Apakah anda yakin menghapus Pengaduan a/n
                                                        <span>{{ $pengaduan->karyawan->karyawan }}</span>
                                                    </h5>
                                                    <span class="d-flex justify-content-center"><i
                                                            class="bi bi-exclamation-circle"
                                                            style="font-size: 100px"></i></span>
                                                    <form action="/pengaduan/{{ $pengaduan->id }}" method="post">
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
    @elsecan('teknisi')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Pengaduan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pengaduan</li>
                </ol>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-body table-responsive">
                        <table id="tabel-data" class="table table-striped table-bordered nowrap" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Pelapor</th>
                                    <th class="text-center align-middle">Divisi</th>
                                    <th class="text-center align-middle">Team</th>
                                    <th class="text-center align-middle">Kategori</th>
                                    <th class="text-center align-middle">Masalah</th>
                                    <th class="text-center align-middle">Tanggal Pengaduan</th>
                                    <th class="text-center align-middle">Teknisi</th>
                                    <th class="text-center align-middle">Tanggal Proses</th>
                                    <th class="text-center align-middle">Tanggal Selesai</th>
                                    <th class="text-center align-middle">Penyelesaian</th>
                                    <th class="text-center align-middle">Status</th>
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduansTeknisi as $pengaduan)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->karyawan->karyawan }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->divisi->divisi }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->team->team }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->kategori->kategori }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->masalah }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->created_at }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->user->karyawan->karyawan }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->tgl_proses }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->tgl_selesai }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->penyelesaian }}</td>
                                        <td class="text-center align-middle">
                                            @if ($pengaduan->status == 'open')
                                                <div class="bg-primary rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                            @if ($pengaduan->status == 'progress')
                                                <div class="bg-success rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                            @if ($pengaduan->status == 'close')
                                                <div class="bg-danger rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                                data-bs-target="#KonfirmasiPengaduan{{ $pengaduan->id }}"><i
                                                    class="bi bi-arrow-clockwise"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#PenyelesaianPengaduan{{ $pengaduan->id }}"><i
                                                    class="bi bi-check2-circle"></i></button>
                                        </td>
                                    </tr>
                                    {{-- Modal Konfirmasi Pengaduan --}}
                                    <div class="modal fade" id="KonfirmasiPengaduan{{ $pengaduan->id }}" tabindex="-1"
                                        aria-labelledby="KonfirmasiPengaduan" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Konfirmasi Pengerjaan</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/pengaduan/{{ $pengaduan->id }}" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <div class="form-group">
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Pelapor" class="label-bold">Pelapor</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="karyawan_id">
                                                                            @foreach ($karyawans as $karyawan)
                                                                                @if (old('karyawan_id', $pengaduan->karyawan_id) == $karyawan->id)
                                                                                    <option value="{{ $karyawan->id }}"
                                                                                        selected>
                                                                                        {{ $karyawan->karyawan->karyawan }}
                                                                                    </option>
                                                                                @else
                                                                                    <option value="{{ $karyawan->id }}">
                                                                                        {{ $karyawan->karyawan->karyawan }}
                                                                                    </option>
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
                                                                                @if (old('divisi_id', $pengaduan->divisi_id) == $divisi->id)
                                                                                    <option value="{{ $divisi->id }}"
                                                                                        selected>
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
                                                                    <label for="Team"
                                                                        class="label-bold label-mt">Team</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="team_id">
                                                                            @foreach ($teams as $team)
                                                                                @if (old('team_id', $pengaduan->team_id) == $team->id)
                                                                                    <option value="{{ $team->id }}"
                                                                                        selected>
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
                                                                    <label for="Kategori"
                                                                        class="label-bold label-mt">Kategori</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="kategori_id">
                                                                            @foreach ($kategoris as $kategori)
                                                                                @if (old('kategori_id', $pengaduan->kategori_id) == $kategori->id)
                                                                                    <option value="{{ $kategori->id }}"
                                                                                        selected>
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
                                                                    <label for="Teknisi"
                                                                        class="label-bold label-mt">Teknisi</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="user_id">
                                                                            @foreach ($teknisis as $teknisi)
                                                                                @if (old('user_id', $pengaduan->user_id) == $teknisi->id)
                                                                                    <option value="{{ $teknisi->id }}"
                                                                                        selected>
                                                                                        {{ $teknisi->karyawan->karyawan }}
                                                                                    </option>
                                                                                @else
                                                                                    <option value="{{ $teknisi->id }}">
                                                                                        {{ $teknisi->karyawan->karyawan }}
                                                                                    </option>
                                                                                @endif
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="Level"
                                                                        class="label-bold label-mt">Status</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="status">
                                                                            <option value="progress">Progress</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Masalah"
                                                                        class="label-bold label-mt">Masalah</label>
                                                                    <textarea name="masalah" id="masalah" class="form-control @error('masalah') is-invalid @enderror "
                                                                        placeholder="Masalah..." required>{{ old('masalah', $pengaduan->masalah) }}</textarea>
                                                                    @error('masalah')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <label for="Penyelesaian" class="label-bold label-mt"></label>
                                                            <input type="hidden" id="penyelesaian" name="penyelesaian"
                                                                value="-" />
                                                            <label for="Penyelesaian" class="label-bold label-mt"></label>
                                                            <input type="hidden" id="tgl_proses" name="tgl_proses"
                                                                value="{{ $tgl_proses }}" />
                                                            <label for="Penyelesaian" class="label-bold label-mt"></label>
                                                            <input type="hidden" id="tgl_selesai" name="tgl_selesai"
                                                                value="-" />
                                                        </div>
                                                        <div class="modal-footer justify-content-end">
                                                            @if ($pengaduan->status != 'open')
                                                                <button type="submit"
                                                                    class="btn btn-primary d-flex justify-content-center disabled">Konfirmasi
                                                                    Pengerjaan</button>
                                                            @else
                                                                <button type="submit"
                                                                    class="btn btn-primary d-flex justify-content-center">Konfirmasi
                                                                    Pengerjaan</button>
                                                            @endif
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Modal Penyelesaian Pengaduan --}}
                                    <div class="modal fade" id="PenyelesaianPengaduan{{ $pengaduan->id }}" tabindex="-1"
                                        aria-labelledby="PenyelesaianPengaduan" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Konfirmasi Penyelesaian</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/pengaduan/{{ $pengaduan->id }}" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <div class="form-group">
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Pelapor" class="label-bold">Pelapor</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="karyawan_id">
                                                                            @foreach ($karyawans as $karyawan)
                                                                                @if (old('karyawan_id', $pengaduan->karyawan_id) == $karyawan->id)
                                                                                    <option value="{{ $karyawan->id }}"
                                                                                        selected>
                                                                                        {{ $karyawan->karyawan->karyawan }}
                                                                                    </option>
                                                                                @else
                                                                                    <option value="{{ $karyawan->id }}">
                                                                                        {{ $karyawan->karyawan->karyawan }}
                                                                                    </option>
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
                                                                                @if (old('divisi_id', $pengaduan->divisi_id) == $divisi->id)
                                                                                    <option value="{{ $divisi->id }}"
                                                                                        selected>
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
                                                                    <label for="Team"
                                                                        class="label-bold label-mt">Team</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="team_id">
                                                                            @foreach ($teams as $team)
                                                                                @if (old('team_id', $pengaduan->team_id) == $team->id)
                                                                                    <option value="{{ $team->id }}"
                                                                                        selected>
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
                                                                    <label for="Kategori"
                                                                        class="label-bold label-mt">Kategori</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="kategori_id">
                                                                            @foreach ($kategoris as $kategori)
                                                                                @if (old('kategori_id', $pengaduan->kategori_id) == $kategori->id)
                                                                                    <option value="{{ $kategori->id }}"
                                                                                        selected>
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
                                                                    <label for="Teknisi"
                                                                        class="label-bold label-mt">Teknisi</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="user_id">
                                                                            @foreach ($teknisis as $teknisi)
                                                                                @if (old('user_id', $pengaduan->user_id) == $teknisi->id)
                                                                                    <option value="{{ $teknisi->id }}"
                                                                                        selected>
                                                                                        {{ $teknisi->karyawan->karyawan }}
                                                                                    </option>
                                                                                @else
                                                                                    <option value="{{ $teknisi->id }}">
                                                                                        {{ $teknisi->karyawan->karyawan }}
                                                                                    </option>
                                                                                @endif
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Level"
                                                                        class="label-bold label-mt">Status</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="status">
                                                                            <option value="progress">Progress</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="Masalah"
                                                                        class="label-bold label-mt">Masalah</label>
                                                                    <textarea readonly name="masalah" id="masalah" class="form-control @error('masalah') is-invalid @enderror "
                                                                        placeholder="Masalah..." required>{{ old('masalah', $pengaduan->masalah) }}</textarea>
                                                                    @error('masalah')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="Penyelesaian"
                                                                        class="label-bold label-mt">Penyelesaian</label>
                                                                    <textarea name="penyelesaian" id="penyelesaian" class="form-control @error('penyelesaian') is-invalid @enderror "
                                                                        placeholder="Penyelesaian..." required>{{ old('penyelesaian', $pengaduan->penyelesaian) }}</textarea>
                                                                    @error('penyelesaian')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Tanggal Proses"
                                                                        class="label-bold label-mt">Tanggal Proses</label>
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="form-control @error('tgl_proses') is-invalid @enderror "
                                                                            id="tgl_proses" name="tgl_proses"
                                                                            aria-describedby="emailHelp" readonly
                                                                            value="{{ $tgl_proses }}">
                                                                        @error('tgl_proses')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Tanggal Selesai"
                                                                        class="label-bold label-mt">Tanggal Selesai</label>
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="form-control @error('tgl_selesai') is-invalid @enderror "
                                                                            id="tgl_selesai" name="tgl_selesai"
                                                                            aria-describedby="emailHelp" readonly
                                                                            value="{{ $tgl_selesai }}">
                                                                        @error('tgl_selesai')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-end">
                                                                @if ($pengaduan->penyelesaian != '-' or $pengaduan->status != 'progress')
                                                                    <button type="submit"
                                                                        class="btn btn-primary d-flex justify-content-center disabled">Konfirmasi
                                                                        Penyelesaian</button>
                                                                @else
                                                                    <button type="submit"
                                                                        class="btn btn-primary d-flex justify-content-center ">Konfirmasi
                                                                        Penyelesaian</button>
                                                                @endif
                                                            </div>
                                                            {{-- </div>
                                                            <label for="Penyelesaian" class="label-bold label-mt"></label>
                                                            <input type="hidden" id="tgl_proses" name="tgl_proses"
                                                                value="{{ $tgl_proses }}" />
                                                            <label for="Penyelesaian" class="label-bold label-mt"></label>
                                                            <input type="hidden" id="tgl_selesai" name="tgl_selesai"
                                                                value="{{ $tgl_selesai }}" /> --}}
                                                    </form>
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
    @elsecan('user')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Pengaduan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pengaduan</li>
                </ol>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        <a href="/pengaduan/create" class="btn btn-success"><i class="bi bi-plus-lg pe-2"></i>Tambah Data</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="tabel-data" class="table table-striped table-bordered nowrap" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Pelapor</th>
                                    <th class="text-center align-middle">Divisi</th>
                                    <th class="text-center align-middle">Team</th>
                                    <th class="text-center align-middle">Kategori</th>
                                    <th class="text-center align-middle">Masalah</th>
                                    <th class="text-center align-middle">Tanggal Pengaduan</th>
                                    <th class="text-center align-middle">Teknisi</th>
                                    <th class="text-center align-middle">Tanggal Proses</th>
                                    <th class="text-center align-middle">Tanggal Selesai</th>
                                    <th class="text-center align-middle">Penyelesaian</th>
                                    <th class="text-center align-middle">Status</th>
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduansUser as $pengaduan)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->karyawan->karyawan }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->divisi->divisi }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->team->team }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->kategori->kategori }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->masalah }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->created_at }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->user->karyawan->karyawan }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->tgl_proses }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->tgl_selesai }}</td>
                                        <td class="text-center align-middle">{{ $pengaduan->penyelesaian }}</td>
                                        <td class="text-center align-middle">
                                            @if ($pengaduan->status == 'open')
                                                <div class="bg-primary rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                            @if ($pengaduan->status == 'progress')
                                                <div class="bg-success rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                            @if ($pengaduan->status == 'close')
                                                <div class="bg-danger rounded-3 py-1 text-white" style="font-size: 10px">
                                                    {{ $pengaduan->status }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($pengaduan->status != 'close')
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#PenyelesaianPengaduan{{ $pengaduan->id }}"><i
                                                        class="bi bi-check2-circle"></i></button>
                                            @else
                                                <button type="button" class="btn btn-danger btn-sm" disabled
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#PenyelesaianPengaduan{{ $pengaduan->id }}"><i
                                                        class="bi bi-check2-circle"></i></button>
                                            @endif
                                        </td>
                                    </tr>
																		{{-- Modal Penyelesaian Pengaduan --}}
                                    <div class="modal fade" id="PenyelesaianPengaduan{{ $pengaduan->id }}" tabindex="-1"
                                        aria-labelledby="PenyelesaianPengaduan" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Selesaikan Pengaduan</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/pengaduan/{{ $pengaduan->id }}" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h5 class="text-center">Apakah anda yakin menyelesaikan
                                                                        pengaduan
                                                                    </h5>
                                                                    <span class="d-flex justify-content-center"><i
                                                                            class="bi bi-exclamation-circle"
                                                                            style="font-size: 100px"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Pelapor" class="label-bold">Pelapor</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="karyawan_id">
                                                                            @foreach ($karyawans as $karyawan)
                                                                                @if (old('karyawan_id', $pengaduan->karyawan_id) == $karyawan->id)
                                                                                    <option value="{{ $karyawan->id }}"
                                                                                        selected>
                                                                                        {{ $karyawan->karyawan->karyawan }}
                                                                                    </option>
                                                                                @else
                                                                                    <option value="{{ $karyawan->id }}">
                                                                                        {{ $karyawan->karyawan->karyawan }}
                                                                                    </option>
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
                                                                                @if (old('divisi_id', $pengaduan->divisi_id) == $divisi->id)
                                                                                    <option value="{{ $divisi->id }}"
                                                                                        selected>
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
                                                                    <label for="Team"
                                                                        class="label-bold label-mt">Team</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="team_id">
                                                                            @foreach ($teams as $team)
                                                                                @if (old('team_id', $pengaduan->team_id) == $team->id)
                                                                                    <option value="{{ $team->id }}"
                                                                                        selected>
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
                                                                    <label for="Kategori"
                                                                        class="label-bold label-mt">Kategori</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="kategori_id">
                                                                            @foreach ($kategoris as $kategori)
                                                                                @if (old('kategori_id', $pengaduan->kategori_id) == $kategori->id)
                                                                                    <option value="{{ $kategori->id }}"
                                                                                        selected>
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
                                                                    <label for="Teknisi"
                                                                        class="label-bold label-mt">Teknisi</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="user_id">
                                                                            @foreach ($teknisis as $teknisi)
                                                                                @if (old('user_id', $pengaduan->user_id) == $teknisi->id)
                                                                                    <option value="{{ $teknisi->id }}"
                                                                                        selected>
                                                                                        {{ $teknisi->karyawan->karyawan }}
                                                                                    </option>
                                                                                @else
                                                                                    <option value="{{ $teknisi->id }}">
                                                                                        {{ $teknisi->karyawan->karyawan }}
                                                                                    </option>
                                                                                @endif
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Level"
                                                                        class="label-bold label-mt">Status</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select" name="status">
                                                                            <option value="close">Close</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Masalah"
                                                                        class="label-bold label-mt">Masalah</label>
                                                                    <textarea readonly name="masalah" id="masalah" class="form-control @error('masalah') is-invalid @enderror "
                                                                        placeholder="Masalah..." required>{{ old('masalah', $pengaduan->masalah) }}</textarea>
                                                                    @error('masalah')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Penyelesaian"
                                                                        class="label-bold label-mt">Penyelesaian</label>
                                                                    <textarea name="penyelesaian" id="penyelesaian" class="form-control @error('penyelesaian') is-invalid @enderror "
                                                                        placeholder="Penyelesaian..." required>{{ old('penyelesaian', $pengaduan->penyelesaian) }}</textarea>
                                                                    @error('penyelesaian')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Tanggal Proses"
                                                                        class="label-bold label-mt">Tanggal Proses</label>
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="form-control @error('tgl_proses') is-invalid @enderror "
                                                                            id="tgl_proses" name="tgl_proses"
                                                                            aria-describedby="emailHelp" readonly
                                                                            value="{{ $tgl_proses }}">
                                                                        @error('tgl_proses')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row d-none">
                                                                <div class="col">
                                                                    <label for="Tanggal Selesai"
                                                                        class="label-bold label-mt">Tanggal Selesai</label>
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="form-control @error('tgl_selesai') is-invalid @enderror "
                                                                            id="tgl_selesai" name="tgl_selesai"
                                                                            aria-describedby="emailHelp" readonly
                                                                            value="{{ $tgl_selesai }}">
                                                                        @error('tgl_selesai')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-end">
                                                                @if ($pengaduan->penyelesaian != '-')
                                                                    <button type="submit"
                                                                        class="btn btn-primary d-flex justify-content-center ">Konfirmasi
                                                                        Penyelesaian</button>
                                                                @else
                                                                    <button type="submit"
                                                                        class="btn btn-primary d-flex justify-content-center disabled">Konfirmasi
                                                                        Penyelesaian</button>
                                                                @endif
                                                            </div>
                                                            {{-- </div>
                                                            <label for="Penyelesaian" class="label-bold label-mt"></label>
                                                            <input type="hidden" id="tgl_proses" name="tgl_proses"
                                                                value="{{ $tgl_proses }}" />
                                                            <label for="Penyelesaian" class="label-bold label-mt"></label>
                                                            <input type="hidden" id="tgl_selesai" name="tgl_selesai"
                                                                value="{{ $tgl_selesai }}" /> --}}
                                                    </form>
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
    @endcan
    @include('footer.index')
@endsection
