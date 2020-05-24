@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">
        <h3><i class="fa fa-graduation-cap"></i> Data kelas</h3><hr>
        <table class="table table-hover text-center">
          <tr>
            <th >No</th>
            <th>Kelas</th>
            <th>Kompetensi Keahlian</th>
            <th>Aksi</th>
          </tr>
          <tr>
          @foreach ($grades as $grade)
            <tr>
              <td>{{++$i}}</td>
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
        {!! $grades->links() !!}
        </div>
    </div>
</div>        
@endsection