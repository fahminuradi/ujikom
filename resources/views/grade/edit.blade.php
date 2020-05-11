@extends('layouts.index')
@section('content')
  <div class="container">
  	<form action="{{route('grade.update',$grade->id)}}" method="post">
  	  @csrf
      @method('PUT')
      <div class="col-md-10">
            <div class="container"></div>
                <div class="col-md-12">
                    <fieldset>
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
                    </fieldset>
                    <fieldset>
                        <a href="{{route('grade.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambahkan</button>
                    </fieldset>
                </div>
            </div>
        </div>
  	</form>

  </div>
@endsection