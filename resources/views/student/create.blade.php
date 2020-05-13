@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-12">
        <div class="card-body">
        {{ Form::open(['url' => ['student']]) }}
        @include('student.field')
        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Tambah</button>
        {{ Form::close() }}
        </div>
    </div>
</div>    
@endsection