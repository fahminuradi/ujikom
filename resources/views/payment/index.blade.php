@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">

        <table class="table table-hover">
            <tr>
                <th style="width:5%">No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Jumlah Bayar</th>
                <th>Tanggal Bayar</th>
            </tr>
            @foreach($payments as $pay)
            <tr>
                <td>{{++$i}}</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>
            @endforeach
            </table>

        </div>
    </div>
</div>
@endsection