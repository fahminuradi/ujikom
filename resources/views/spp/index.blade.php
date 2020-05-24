@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">
        <h3><i class="fa fa-money"></i> Nominal Pembayaran SPP</h3><hr>
        <table class="table table-hover text-center">
          <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Nominal</th>
            <th>Aksi</th>
          </tr>
          <tr>
          @foreach ($spps as $spp)
            <tr>
              <td>{{++$i}}</td>
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
        </table>
        {!!$spps->links()!!}
        </div>
    </div>
</div>        
@endsection