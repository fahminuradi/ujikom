@extends('layouts.index')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">

        <form action="{{route('grade.update',$grade->id)}}" method="post">
  	  @csrf
      @method('PUT')
            <legend><i class="fa fa-pencil"></i> Edit Kelas</legend>
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{$grade->nama_kelas}}">
            <label>Kompetensi Keahlian</label>
                <select name="kompetensi_keahlian" class="form-control">
                    <option value="{{$grade->kompetensi_keahlian}}">{{$grade->kompetensi_keahlian}}</option> 
                    <option value="Teknik Kendaraan Ringan Otomotif">TEKNIK KENDARAAN RINGAN</option>                        
                    <option value="Teknik dan Bisnis Sepeda Motor">TEKNIK DAN BISNIS SEPEDA MOTOR</option>                        
                    <option value="Teknik Komputer dan Jaringan">TEKNIK KOMPUTER DAN JARINGAN</option>                        
                    <option value="Rekayasa Perangkat Lunak">REKAYASA PERANGKAT LUNAK</option>
                    <option value="Farmasi">FARMASI</option>                        
                </select>
                <hr>
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-refresh"></i> Ubah</button>
  	        </form>
        </div>
    </div>
</div>        
@endsection