@extends('layouts.index')
@section('content')
<div class="content">
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-database"> Data Siswa</i></h3>
  </div>
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <th style="width: 10%">NIS</th>
        <th style="width: 150px">Nama Siswa</th>
        <th style="width: 150px">Kelas</th> 
        <th style="width: 40px">Aksi</th>
      </tr>
      @foreach ($students as $student)
      <tr>
        <td>{{$student->nis}}</td>
        <td>{{$student->nama}}</td>
        <td>{{$student->grade->nama_kelas}}</td>
        <td>
	  	  	  <form action="{{ route('student.destroy', $student->id) }}" method="post">
	  	  	  	<a class="btn btn-sm btn-success" href="{{route('student.show',$student->id)}}"><i class="fa fa-eye"></i></a>
	  	  	  	<a class="btn btn-sm btn-warning" href="{{route('student.edit',$student->id)}}"><i class="fa fa-pencil"></i></a>
	  	  	  	@csrf
	  	  	  	@method('DELETE')
	  	  	  	<button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
	  	  	  </form></td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection