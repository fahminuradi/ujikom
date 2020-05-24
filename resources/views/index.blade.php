@extends('layouts.index1')
@section('content')
<div class="col-xl-12 col-lg-2">
    <div class="card shadow mb-">
        <div class="card-body">
        <h4><i class="fa fa-bullhorn"></i> Laporan Pembayaran SPP Bulanan</h4><hr>
        <div class="col-xl-12 col-md-12 mb-4">
            @foreach($payment as $pay)
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><i class="fa fa-check-circle"></i> Informasi Pembayaran Berhasil</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Pembayaran Atas Nama:</div>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td> : {{$pay->student->nama}}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td> : {{$pay->student->grade->nama_kelas}}</td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td>
                            <td> : bulan {{$pay->bulan}}</td>
                        </tr>
                        <tr>
                            <td>Diterima</td>
                            <td> : {{$pay->tanggal}}</td>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div><br>
            @endforeach
          </div>
            {!! $payment->links() !!}
        </div>
    </div>
</div>
@endsection