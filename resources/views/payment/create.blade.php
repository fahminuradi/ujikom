@extends('layouts.index')
@section('content')

<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">
        <form action="{{route('payment.store')}}" method="post">
        @csrf
            <div class="form-group">
                <label>Tahun Ajaran</label>
                <select name="id_spp" class="form-control" required>
                @foreach ($spps as $spp)
                    <option data-subtext="{{$spp->id}}" value="{{$spp->id}}">{{ $spp->tahun }} - Rp. {{ $spp->nominal }}</option>
                @endforeach
                </select>
            </div>
            
            <div class="form-group">
            <label>NIS</label>
                <select name="id_student" class="form-control" required>
                    @foreach ($students as $student)
                        <option value="{{$student->id}}" data-subtext="{{$student->id}}">{{$student->nis}}</option>
                    @endforeach 
                </select>
            </div>

            <div class="form-group">
            <label>Untuk Pembayaran Bulan :</label>
                <select name="bulan" class="form-control" required>
                    <option value="">-Pilih Bulan-</option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jumlah Bayar</label>
                <input type="number" name="jumlah" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tanggal Bayar</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <hr>
            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</button>
        </form>
        </div>
    </div>
</div>     

@endsection