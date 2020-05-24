@extends('layouts.index')

@section('content')
    
<div class="col-xl-12 col-lg-2">
  <div class="card shadow mb-2">
    <!-- Card Header - Dropdown -->

    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-area">
      <h3><i class="fa fa-bullhorn"></i> Pusat Informasi dan Control Aplikasi - Halaman Administrator</h3><hr>
        <div class="row">
          <!-- Jumlah Siswa Card Example -->
          <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Siswa</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $student->count() }} <sup>orang</sup></div>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-user fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">History Pembayaran</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$payment->count()}} Transaksi diterima</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-history fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kelas</div>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $grade->count() }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    
                      <!-- Pending Requests Card Example -->
          <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Petugas</div>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$user->count()}}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user-secret fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
