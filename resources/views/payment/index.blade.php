@extends('layouts.index')
@section('content')
<div class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-paypal"></i> Data Pembayaran</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
            <tr>
                <th style="width: 10%">NIS</th>
                <th style="width: 40%">Nama Lengkap</th>
                <th style="width: 40%">Kelas</th>
                <th style="width: 10%">Aksi</th>
            </tr>
            @foreach ($students as $pay)
            <tr>
                <td>{{$pay->nis}}</td>
                <td>{{$pay->nama}}</td>
                <td>{{$pay->grade->nama_kelas}}</td>
                <td><a href="#" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</a></td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection