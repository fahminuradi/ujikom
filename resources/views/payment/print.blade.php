<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pembayaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .card{
            margin: 20px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <img src="{{ asset('asset/img/dikdas.png') }}" class="img" alt="logo.png" width="90"><br>
            <span class="text-header text-bold text-success">
                MAJELIS DIKDASMEN PIMPINAN DAERAH MUHAMMADIYAH 
               <span class="size2">KABUPATEN KUNINGAN</span> <br> 
               SMK MUHAMMADIYAH 2 KUNINGAN <br>
            </span>
             <span class="text-desc">Jalan Raya Cigugur, No.28, Telp/FAX (0232) 873475 Website <span class="underline">smkm2-kuningan.sch.id</span> - Email <span class="underline">smkm2-kuningan.sch.id</span> <br>Kec. Cigugur Kab. Kuningan 45511 <br> </span>
                <hr>
                <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jumlah Bayar</th>
                        <th scope="col">Tanggal Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payment as $pay)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$pay->student->nis}}</td>
                            <td>{{$pay->student->nama}}</td>
                            <td>{{$pay->student->grade->nama_kelas}}</td>
                            <td>{{$pay->jumlah}}</td>
                            <td>{{$pay->tanggal}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <script>
                        window.print();
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>
</html>