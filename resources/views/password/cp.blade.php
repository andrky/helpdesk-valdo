<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Helpdesk Valdo | {{ $title }}</title>
    <link href="/template/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center my-5">
                        <div class="col-lg-5">

                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">
                                    <a href="/dashboard" class="btn-close" type="button"></a>
                                    <h3 class="text-center font-weight-light my-4">Ganti Password</h3>
                                </div>
                                <div class="card-body py-5">
                                    <form action="/cp/{{ Auth::user()->id }}" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('old_password') is-invalid @enderror"
                                                name="old_password" id="old_password" type="password"
                                                placeholder="Password Lama" />
                                            <label for="inputPassword">Password Lama</label>
                                            @error('old_password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                name="password" id="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password Baru</label>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" id="password_confirmation" type="password"
                                                placeholder="Ulangi Password Baru" />
                                            <label for="inputPassword">Ulangi Password Baru</label>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <button class="for-hover w-100 text-light btn btn-md btn-primary"
                                                type="submit">Ganti Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <hr class="dropdown-divider">
        <div id="layoutAuthentication_footer">
            @include('footer.index')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="/template/js/scripts.js"></script>
</body>

</html>
