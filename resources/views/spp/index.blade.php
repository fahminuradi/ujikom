@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">

        <table class="table table-hover">
          <tr>
            <th style="width: 150px">Tahun</th>
            <th style="width: 150px">Nominal</th>
            <th style="width: 40px">Aksi</th>
          </tr>
          <tr>
          @foreach ($spps as $spp)
            <tr>
              <td>{{$spp->tahun}}</td>
              <td>Rp. {{$spp->nominal}}</td>
              <td>
                <form action="{{ route('spp.destroy', $spp->id) }}" method="post">
                  <a class="btn btn-sm btn-warning" href="{{route('spp.edit',$spp->id)}}"><i class="fa fa-edit"></i></a>
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