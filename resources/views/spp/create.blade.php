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
        <form action="{{route('spp.store')}}" method="post">
        @csrf
        <div class="col-md-10">
            <div class="container"></div>
                <div class="col-md-12">
                    <fieldset>
                        <legend><i class="fa fa-user-plus-o"></i> Tambah</legend>
                        <label>Tahun</label>
                        <input type="text" name="tahun" class="form-control">
                        <label>Nominal</label>
                        <input type="text" name="nominal" class="form-control">
                    </fieldset>
                    <fieldset>
                        <a href="{{route('spp.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Batal</a>
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</button>
                    </fieldset>
                </div>
            </div>
        </div>
        </form>
    </body>
    </html>


@endsection
