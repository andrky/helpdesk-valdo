<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Helpdesk Valdo | {{ $title }}</title>
    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    {{-- CDN Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		{{-- CDN Bootstrap CSS Datatable --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    {{-- Local CSS --}}
    {{-- <link href="/template/css/my.css" rel="stylesheet"> --}}
    <link href="/template/css/styles.css" rel="stylesheet" />
</head>
<body>
	
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Laporan Keseluruhan</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Laporan Keseluruhan</li>
			</ol>
			@if (session()->has('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ session('success') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			@endif
			<div class="card mb-4">
                    <div class="my-2">
                        <form action="/laporan" method="GET">
													<div class="input-group mb-3">
													</div>
                        </form>
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
                                    </tr>
                                @endforeach
                            </tbody>
													</table>
                    </div>
									</div>
								</div>
        </main>
</body>
