<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Top 5 Sales Counter bulan ini</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <div class="table-responsive">
      <table  id="tbl-salesc"  class="table m-0 table-hover table-striped">
        <thead>
            <tr>
              <th>#</th>
              <th style="text-align:left">Sales Counter</th>
              <th style="text-align:left">SO</th>
              <th style="text-align:left">KDP</th>
            </tr>
        </thead>
        <tbody>            
           @foreach($data_salesc as $d)
            <tr>
                <td  style="text-align:left">{{ number_format($d->no,0) }}</td> 
                <td >{{ $d->EMPLOYEENAME }}</td>
                <td  style="text-align:right">{{ number_format($d->SO,0) }}</td>                        
                <td  style="text-align:right">{{ number_format( $d->KDP,0) }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot><tr></tr></tfoot>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
<!-- /.card-body -->
<!-- /.card-body --> 
</div> <!-- /.card --> 
               
