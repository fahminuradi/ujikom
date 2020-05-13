@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">
        <form action="{{route('spp.store')}}" method="post">
        @csrf
            <legend><i class="fa fa-user-plus-o"></i> Tambah</legend>
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control">
            <label>Nominal</label>
            <input type="number" name="nominal" class="form-control">
            <hr>
            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</button>
        </form>
        </div>
    </div>
</div>        
@endsection
