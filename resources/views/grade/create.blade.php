@extends('layouts.index')


@section('content')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            .container{
                width: 60%;
                margin: 10px auto;
            }
            fieldset{
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <form action="{{route('grade.store')}}" method="post">
        @csrf
        <div class="col-md-10">
            <div class="container"></div>
                <div class="col-md-12">
                    <fieldset>
                        <legend><i class="fa fa-user-plus-o"></i> Tambah</legend>
                        <label>Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control">
                        <label>Kompetensi Keahlian</label>
                        <select name="kompetensi_keahlian" class="form-control">
                            <option value="Teknik Kendaraan Ringan Otomotif">TEKNIK KENDARAAN RINGAN OTOMOTIF</option>                        
                            <option value="Teknik dan Bisnis Sepeda Motor">TEKNIK DAN BISNIS SEPEDA MOTOR</option>                        
                            <option value="Teknik Komputer dan Jaringan">TEKNIK KOMPUTER DAN JARINGAN</option>                        
                            <option value="Rekayasa Perangkat Lunak">REKAYASA PERANGKAT LUNAK</option>
                            <option value="Farmasi">FARMASI</option>                        
                        </select>
                    </fieldset>
                    <fieldset>
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</button>
                        <a href="{{route('grade.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Batal</a>
                    </fieldset>
                </div>
            </div>
        </div>
        </form>
    </body>
    </html>


@endsection
