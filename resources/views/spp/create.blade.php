@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">
        <form action="{{route('spp.store')}}" method="post">
        @csrf
            <div class="form-group">
                <label>Tahun</label>
                <input type="number" name="tahun" class="form-control">
            </div>
            <div class="form-group">
                <label>Nominal</label>
                <input type="number" name="nominal" class="form-control">
            </div>
            <hr>
            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</button>
        </form>
        </div>
    </div>
</div>        
@endsection
