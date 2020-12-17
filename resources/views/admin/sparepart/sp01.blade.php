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
                        <h1 class="m-0">Cek Stok Sparepart</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Sparepart</li>
                        <li class="breadcrumb-item active">Cek Stok Sparepart</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- /.content-header -->
        <div class="card card-primary">
          <!-- form start -->
          <form action="/sp01/filter" method="get" id="form-filter" autocomplete="off">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="ho" id="ho" <?php if(isset($_GET['ho'])&&($ho=="2"||$ho=="on"))  echo "checked='checked'"; ?>>
                            <label for="ho" class="custom-control-label">Stok Holding</label>
                        </div>
                        
                        <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="cbg" name="cbg" <?php if(isset($_GET['cbg'])&&($ho==""||$ho=="on")) echo "checked='checked'"; ?>>
                                <label for="cbg" class="custom-control-label">Stok Cabang Lain</label>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 mt-1 pt-1">
                        <div class="input-group input-group">
                            <input type="text" class="form-control" name="cari">
                            <span class="input-group-append">
                            <button type="submit" class="btn btn-primary btn">
                                <i class="fa fa-search mr-3" aria-hidden="true"></i>Cari</button>
                            </span>
                        </div><!-- /input-group -->
                    </div>             
                </div>
            </div>
            <!-- /.card-body -->

          </form>
        </div>
        <!-- /.card -->
        
        @yield('konten')
    </div>

@endsection

@section('scripts') 
 
@endsection