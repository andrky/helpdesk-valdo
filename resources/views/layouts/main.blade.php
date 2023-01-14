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

<body class="sb-nav-fixed">
    @include('navbar.navbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('sidebar.sidebar')
        </div>
        <div id="layoutSidenav_content">
            @yield('content')

        </div>
    </div>

    {{-- CDB Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    {{-- CDN Jquery & JS Datatable --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
		{{-- local JS --}}
    <script src="/template/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/template/assets/demo/chart-area-demo.js"></script>
    <script src="/template/assets/demo/chart-bar-demo.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="/template/js/datatables-simple-demo.js"></script> --}}
    {{-- @error('kategori')
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('TambahKategori'));
            myModal.show();
        </script>
        
    @enderror --}}
    {{-- @if (session()->has('error'))
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('TambahKategori'));
            myModal.show();
        </script>
    @endif --}}
    {{-- <script>
        $('#TambahKategori').on('hidden.bs.modal', function() {
            this.modal('show');
        });
    </script> --}}
    {{-- <script>
        $(document).ready(function() {
            @if (count($errors) > 0)
                $('#TambahKategori').modal('show');
            @endif
        });
    </script> --}}
    {{-- @if (count($errors) > 0)
        <script>
            $(document).ready(function() {
                $('#TambahKategori').modal('show');
            });
        </script>
    @endif --}}
</body>

</html>
