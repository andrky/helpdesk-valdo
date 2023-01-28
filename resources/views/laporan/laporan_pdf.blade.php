<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Helpdesk Valdo | {{ $title }}</title>
    <style>
        .center {
            text-align: center;
        }

        #kota {
            font-size: 14px;
        }

        #pt {
            font-size: 20px;
        }

        #alamat {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <main>
        <table align="center">
            <tr>
                <td>
                    <img src="{{ public_path('img/logo.png') }}" width="200" height="100"
                        style="text-align: center" alt="Logo Valdo">
                </td>
                <td>
                    <p class="center" id="kota">Kota Jakarta Selatan. Daerah Khusus Ibukota Jakarta</p>
                    <p class="center" id="pt"><b>PT Valdo Sumber Daya Mandiri</b></p>
                    <p class="center" id="alamat">Jl. Mega Kuningan No.17, RW.4. Telp (021) 60867879</p>
                </td>
            </tr>
        </table></br>
        <table align="left">
            <tr>
                <td>
                    <p style="font-size: 20px"><b>Pengaduan Keseluruhan</b></p>
                </td>
            </tr>
        </table></br>
        <table border="1" align="">
            <thead>
                <tr class="center">
                    <th>No</th>
                    <th>Pelapor</th>
                    <th>Divisi</th>
                    <th>Team</th>
                    <th>Kategori</th>
                    <th>Masalah</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Teknisi</th>
                    <th>Tanggal Proses</th>
                    <th>Tanggal Selesai</th>
                    <th>Penyelesaian</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduans as $pengaduan)
                    <tr class="center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pengaduan->karyawan->karyawan }}</td>
                        <td>{{ $pengaduan->divisi->divisi }}</td>
                        <td>{{ $pengaduan->team->team }}</td>
                        <td>{{ $pengaduan->kategori->kategori }}</td>
                        <td>{{ $pengaduan->masalah }}</td>
                        <td>{{ $pengaduan->created_at }}</td>
                        <td>{{ $pengaduan->user->karyawan->karyawan }}</td>
                        <td>{{ $pengaduan->tgl_proses }}</td>
                        <td>{{ $pengaduan->tgl_selesai }}</td>
                        <td>{{ $pengaduan->penyelesaian }}</td>
                        <td>
                            @if ($pengaduan->status == 'open')
                                <div class="bg-primary rounded-3 py-1 text-white" style="font-size: 16px">
                                    {{ $pengaduan->status }}
                                </div>
                            @endif
                            @if ($pengaduan->status == 'progress')
                                <div class="bg-success rounded-3 py-1 text-white" style="font-size: 16px">
                                    {{ $pengaduan->status }}
                                </div>
                            @endif
                            @if ($pengaduan->status == 'close')
                                <div class="bg-danger rounded-3 py-1 text-white" style="font-size: 16px">
                                    {{ $pengaduan->status }}
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
            {{-- </table>
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
        </tbody> --}}
        </table><br><br>
        <table align="left">
            <tr>
                <td>Jakarta, {{ $tanggal }}</td>
            </tr><br><br><br><br>
            <tr>
                <td>Awan Hartadi</td>
                
            </tr><hr>
            <tr>
                <td>Team Leader</td>
            </tr>
        </table>
        </div>
        </div>
    </main>
</body>
