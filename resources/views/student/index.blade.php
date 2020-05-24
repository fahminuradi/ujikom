@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-12">
        <div class="card-body">
        <h3><i class="fa fa-users"></i> Data Siswa</h3><hr>
        <table class="table table-hover text-center">
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th> 
            <th>Kompetensi Keahlian</th> 
            <th>Aksi</th>
          </tr>
          @foreach ($students as $student)
            <tr>
              <td>{{++$i}}</td>
              <td>{{$student->nis}}</td>
              <td>{{$student->nama}}</td>
              <td>{{$student->grade->nama_kelas}}</td>
              <td>{{$student->grade->kompetensi_keahlian}}</td>
              <td>
                  <form action="{{ route('student.destroy', $student->id) }}" method="post">
                    <a class="btn btn-sm btn-warning" href="{{route('student.edit',$student->id)}}"><i class="fa fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  </form></td>
            </tr>
            @endforeach
          </table>
          {!!$students->links()!!}
        </div>
    </div>
</div>  
@endsection