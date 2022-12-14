@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Divisi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tambah Divisi</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
									<a href="/divisi" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/divisi" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Divisi" class="label-bold">Divisi</label>
                            <input type="text" class="form-control @error('divisi') is-invalid @enderror "
                                id="divisi" name="divisi" aria-describedby="emailHelp" placeholder="Divisi..."
                                required autofocus value="{{ old('divisi') }}">
                            @error('divisi')
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
