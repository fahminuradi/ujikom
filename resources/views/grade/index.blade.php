@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">

        <table class="table table-hover">
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
                  <a class="btn btn-sm btn-warning" href="{{route('grade.edit',$grade->id)}}"><i class="fa fa-edit"></i></a>
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
    </div>
</div>        
@endsection