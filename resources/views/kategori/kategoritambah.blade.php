@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tambah Kategori</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
									<a href="/kategori" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/kategori" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Kategori" class="label-bold">Kategori</label>
                            <input type="text" class="form-control @error('kategori') is-invalid @enderror "
                                id="kategori" name="kategori" aria-describedby="emailHelp" placeholder="Kategori..."
                                required autofocus value="{{ old('kategori') }}">
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
                </div>
            </div>
        </div>
    </main>
    @include('footer.index')
@endsection
