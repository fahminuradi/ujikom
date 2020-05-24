<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E SPP Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('welcome/css/style.css')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">E SPP Payment</a>
        </nav>
    </section>

    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                    <div class="card">
                        <div class="card-header alert alert-success">
                            Aplikasi Pembayaran SPP Online
                        </div>
                        <div class="col-md-12">
                            Login Untuk Siswa
                        </div>
                        <form method="POST" action="{{ url('halaman_siswa') }}">
                          @csrf
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form {{ $errors->has('nis') ? ' is-invalid' : '' }}" name="nis" value="{{ old('nis') }}" required autofocus placeholder="Masukan NIS Anda">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form {{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus placeholder="Masukan Nama Lengkap Anda">
                                </div>
                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                              </div>
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </form>
                        <div class="card-footer alert-success">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-youtube-play"></i>
                            <i class="fa fa-google-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>