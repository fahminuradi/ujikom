@extends('layouts.index')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Edit Biodata Pegawai</h3>
  	  </div>
  	</div>
  	<form action="{{route('spp.update',$spp->id)}}" method="post">
  	  @csrf
      @method('PUT')
      <div class="col-md-10">
            <div class="container"></div>
                <div class="col-md-12">
                    <fieldset>
                        <legend><i class="fa fa-user-plus-o"></i> Tambah</legend>
                        <label>Tahun</label>
                        <input type="text" name="tahun" class="form-control" value="{{$spp->tahun}}">
                        <label>Nominal</label>
                        <input type="text" name="nominal" class="form-control" value="{{$spp->nominal}}">
                    </fieldset>
                    <fieldset>
                        <a href="{{route('spp.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambahkan</button>
                    </fieldset>
                </div>
            </div>
        </div>
  	</form>

  </div>
@endsection