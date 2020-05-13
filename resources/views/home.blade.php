@extends('layouts.index')

@section('content')
    
<div class="col-xl-12 col-lg-2">
  <div class="card shadow mb-2">
    <!-- Card Header - Dropdown -->

    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-area">
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
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$payment->count()}} orang sudah bayar</div>
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
                    <i class="fas fa-tags fa-2x text-gray-300"></i>
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
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">SPP Belum Lunas Bulan Ini</div>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
