@extends('layouts.index')

@section('content')
<div class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-dashboard"></i> Selamat Datang! Anda masuk sebagai <a href="#">{{auth::user()->name}}</a></h3>
        </div>
        <div class="box-body">
        <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>2.660</h3>
                  <p>Jumlah Siswa</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Rp.</sup>275.000,.</h3>
                  <p>Nominal SPP Tahun Ini</p>
                </div>
                <div class="icon">
                  <i class="fa fa-dollar"></i>
                </div>
                <a href="#" class="small-box-footer">selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>50</h3>
                  <p>Jumlah Rombel kelas</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
                <a href="#" class="small-box-footer">selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Riwayat Pembayaran</h3>
                  <p><i class="fa fa-ban"></i> Hanya admin yang masuk!</p>
                </div>
                <div class="icon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <a href="#" class="small-box-footer">selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
