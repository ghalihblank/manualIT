@extends('admin.layouts.master')

@section('title')
    Manual IT
@endsection

@section('css') 
@endsection

@section('content') 
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h1 class="m-0">Rekap Penjualan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Sparepart</li>
                        <li class="breadcrumb-item active">Rekap Penjualan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- /.content-header -->
        <div class="card card-primary">
          <!-- form start -->
            
              <form action="/sp03/proses" method="get" id="form-filter">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                              <label>Bulan</label>
                              <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="bulan">
                              <option value="1" @if (isset($_GET['bulan'])&&($bln=="1")) selected="selected" @endif >Januari</option>
                                <option value="2" @if (isset($_GET['bulan'])&&($bln=="2")) selected="selected" @endif >Februari</option>
                                <option value="3" @if (isset($_GET['bulan'])&&($bln=="3")) selected="selected" @endif >Maret</option>
                                <option value="4" @if (isset($_GET['bulan'])&&($bln=="4")) selected="selected" @endif >April</option>
                                <option value="5" @if (isset($_GET['bulan'])&&($bln=="5")) selected="selected" @endif >Mei</option>
                                <option value="6" @if (isset($_GET['bulan'])&&($bln=="6")) selected="selected" @endif >Juni</option>
                                <option value="7" @if (isset($_GET['bulan'])&&($bln=="7")) selected="selected" @endif >Juli</option>
                                <option value="8" @if (isset($_GET['bulan'])&&($bln=="8")) selected="selected" @endif >Agustus</option>
                                <option value="9" @if (isset($_GET['bulan'])&&($bln=="9")) selected="selected" @endif >September</option>
                                <option value="10" @if (isset($_GET['bulan'])&&($bln=="10")) selected="selected" @endif >Oktober</option>
                                <option value="11" @if (isset($_GET['bulan'])&&($bln=="11")) selected="selected" @endif >November</option>
                                <option value="12" @if (isset($_GET['bulan'])&&($bln=="12")) selected="selected" @endif >Desember</option>
                              </select>
                             </div> <!-- /.form-group -->               
                        </div> <!-- col -->
                        <div class="col-sm-2">
                            <div class="form-group">
                              <label>Tahun</label>
                              <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="tahun">
                                <option selected value="2020">2020</option>
                              </select>
                            </div> <!-- /.form-group -->
                        </div>
                        <div class="col-sm-4 mt-4 pt-2">
                                <label> </label>
                              <button type="submit" class="btn btn-primary"><i class="fas fa-share-square mr-3"></i>Proses</button>
                        </div>
                    </div> <!-- row -->
                </div> <!-- /.card-body -->
                
              </form>   
        </div>
        <!-- /.card -->

        @yield('konten')
    </div>

@endsection

@section('scripts') 

@endsection