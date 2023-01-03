@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Divisi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Divisi</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
									<a href="/divisi" class="btn btn-success"><i class="bi bi-arrow-left pe-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/divisi/{{ $divisis->id }}" method="post">
												@method('put')
                        @csrf
                        <div class="form-group">
                            <label for="Divisi" class="label-bold">Divisi</label>
                            <input type="text" class="form-control @error('divisi') is-invalid @enderror "
                                id="divisi" name="divisi" aria-describedby="emailHelp" placeholder="Divisi..."
                                required autofocus value="{{ old('divisi', $divisis->divisi) }}">
                            @error('divisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
														<label for="Divisi" class="label-bold label-mt">Team</label>
                            <input type="text" class="form-control  @error('team') is-invalid @enderror "
                                id="team" name="team" aria-describedby="emailHelp" placeholder="Team..."
                                required autofocus value="{{ old('team', $divisis->team) }}">
                            @error('team')
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
