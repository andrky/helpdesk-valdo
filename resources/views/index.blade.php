@extends('layouts.main')

@section('content')
		@can('admin')
    <main>
        <div class="container-fluid px-4 pt-5">
					@if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $open }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white stretched-link text-decoration-none">Open</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $progress }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white stretched-link text-decoration-none">Progress</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $close }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white text-decoration-none ">Close</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
		@elsecan('teknisi')
		<main>
        <div class="container-fluid px-4 pt-5">
					@if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $openTeknisi }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white stretched-link text-decoration-none">Open</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $progressTeknisi }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white stretched-link text-decoration-none">Progress</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $closeTeknisi }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white text-decoration-none ">Close</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
		@elsecan('user')
		<main>
        <div class="container-fluid px-4 pt-5">
					@if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $openUser }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white stretched-link text-decoration-none">Open</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $progressUser }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white stretched-link text-decoration-none">Progress</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body fs-5 py-5">{{ $closeUser }} Pengaduan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="fs-5 text-white text-decoration-none ">Close</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
		@endcan
    @include('footer.index')
@endsection
