@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">

      <form action="{{route('spp.update',$spp->id)}}" method="post">
  	  @csrf
      @method('PUT')
          <label>Tahun</label>
          <input type="text" name="tahun" class="form-control" value="{{$spp->tahun}}">
          <label>Nominal</label>
          <input type="text" name="nominal" class="form-control" value="{{$spp->nominal}}">
          <hr>
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> Ubah</button>
        </div>
    </div>
</div>        
@endsection