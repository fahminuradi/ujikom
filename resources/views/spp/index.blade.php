@extends('layouts.index')
@section('content')
<div class="content">
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-calendar"> Nominal SPP Pertahun</i></h3>
  </div>
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <th style="width: 150px">Tahun</th>
        <th style="width: 150px">Nominal</th>
        <th style="width: 40px">Aksi</th>
      </tr>
      <tr>
      @foreach ($spps as $spp)
	  	  <tr>
	  	  	<td>{{$spp->tahun}}</td>
	  	  	<td>{{$spp->nominal}}</td>
	  	  	<td>
	  	  	  <form action="{{ route('spp.destroy', $spp->id) }}" method="post">
	  	  	  	<!-- <a class="btn btn-sm btn-success" href="{{route('spp.show',$spp->id)}}"><i class="fa fa-eye"></i></a> -->
	  	  	  	<a class="btn btn-sm btn-warning" href="{{route('spp.edit',$spp->id)}}"><i class="fa fa-pencil"></i></a>
	  	  	  	@csrf
	  	  	  	@method('DELETE')
	  	  	  	<button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
	  	  	  </form>
	  	  	</td>
	  	  </tr>
	  	@endforeach	
      </tr>
    </table>
  </div>
@endsection