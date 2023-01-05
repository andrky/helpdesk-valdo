@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tambah Team</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
									<a href="/team" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/team" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Team" class="label-bold">Team</label>
                            <input type="text" class="form-control @error('team') is-invalid @enderror "
                                id="team" name="team" aria-describedby="emailHelp" placeholder="Team..."
                                required autofocus value="{{ old('team') }}">
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
