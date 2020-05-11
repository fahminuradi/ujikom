@extends('layouts.index')
@section('content')
<div class="content">
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-list"> Daftar Kelas dan Kompetensi Keahlian</i></h3>
  </div>
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <th style="width: 150px">Kelas</th>
        <th style="width: 150px">Kompetensi Keahlian</th>
        <th style="width: 40px">Aksi</th>
      </tr>
      <tr>
      @foreach ($grades as $grade)
	  	  <tr>
	  	  	<td>{{$grade->nama_kelas}}</td>
	  	  	<td>{{$grade->kompetensi_keahlian}}</td>
	  	  	<td>
	  	  	  <form action="{{ route('grade.destroy', $grade->id) }}" method="post">
	  	  	  	<!-- <a class="btn btn-sm btn-success" href="{{route('grade.show',$grade->id)}}"><i class="fa fa-eye"></i></a> -->
	  	  	  	<a class="btn btn-sm btn-warning" href="{{route('grade.edit',$grade->id)}}"><i class="fa fa-pencil"></i></a>
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