@extends('layouts.index')Batal
@section('content')
    <div class="row">
        <div class="col-md-10">
        <div class="col-md-10 mt-6">
            <h2><i class="fa fa-user-plus"></i> Tambahkan Siswa</h2>
            <hr>
            {{ Form::open(['url' => ['student']]) }}
            @include('student.field')
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Tambah</button>
            <a href="/student" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
            {{ Form::close() }}
        </div>
        </div>
    </div>
@endsection