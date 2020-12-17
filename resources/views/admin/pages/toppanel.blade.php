<div class="row">
    <div class="col-lg-2 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                @foreach($data_invoice as $d)
                <h3>{{$d->INVOICE}} Unit</h3>
                @endforeach
                <p>Sales Order</p>
            </div>
            <div class="icon">
            <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
    <!-- small card -->
    <div class="small-box bg-success">
        <div class="inner">
        @foreach($data_kdp as $d)
        <h3>{{$d->inquirynumber}} Data</h3>
        @endforeach

        <p>Prospek</p>
        </div>
        <div class="icon">
            <i class="fas fa-user-plus"></i>
        </div>
        <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
    <!-- small card -->
    <div class="small-box bg-warning">
        <div class="inner">
        @foreach($data_service as $d)
        <h3>{{$d->INV}} Unit</h3>
        @endforeach
        <p>Unit Servis</p>
        </div>
        <div class="icon">
        <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
    <!-- small card -->
    <div class="small-box bg-danger">
        <div class="inner">
        @foreach($data_sp as $d)
        <h3><sup>Rp</sup> {{number_format(($d->DPP)/1000000,0)}}<sub> jt</sub></h3>
        @endforeach

        <p>Penjualan Sparepart</p>
        </div>
        <div class="icon">
        <i class="fas fa-chart-pie"></i>
        </div>
        <a href="/sp03" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
    </div>
    <!-- ./col -->
</div>