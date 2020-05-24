@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">
        <h3><i class="fa fa-history"></i> History Pembayaran</h3><hr>
        <table class="table table-hover">
            <tr>
                <th style="width:5%">No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Jumlah Bayar</th>
                <th>Tanggal Bayar</th>
            </tr>
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
            </table>
            {!! $payments ->links() !!}
        </div>
    </div>
</div>
@endsection