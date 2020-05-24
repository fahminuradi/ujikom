@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-12">
        <div class="card-body">
            <table class="table table-hover text-center">
            <h3><i class="fa fa-user-secret"></i>Data Petugas</h3><hr>
                <tr>
                    <th style="5%">No</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Tanggal/Waktu Pembuatan</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <th>{{++$i}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->level}}</th>
                        <th>{{$user->created_at}}</th>
                    </tr>
                @endforeach
            </table>
            {!! $users->links() !!}
        </div>
    </div>
</div>
@endsection