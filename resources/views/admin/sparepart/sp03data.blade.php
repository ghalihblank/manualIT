@extends('admin.sparepart.sp03')

@section('konten')
        
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Penjualan bulan {{ date("F", mktime(0, 0, 0, $bln, 1)) }} {{ $tahun }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="sp01tabel" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="border px-4 py-2 bg-gray-200 text-center" >Cabang</th>
                        <th class="border px-4 py-2 bg-gray-200 text-center">DPP</th>
                        <th class="border px-4 py-2 bg-gray-200 text-center">PPN</th>
                        <th class="border px-4 py-2 bg-gray-200 text-center">Sales</th>
                        <th class="border px-4 py-2 bg-gray-200 text-center">Disc</th>
                        
                    </tr>
                </thead>
                <tbody>
            
                    @foreach($data as $d)
                    <tr>
                        <td class="border px-4 py-2 ">{{ $d->CBG }}</td>
                        <td class="border px-4 py-2 text-right">{{ number_format($d->TOTDPPAMT,0) }}</td>
                        <td class="border px-4 py-2 text-right">{{ number_format($d->TOTPPNAMT,0) }}</td>                        
                        <td class="border px-4 py-2 text-right">{{ number_format( $d->TOTSALESAMT,0) }}</td>
                        <td class="border px-4 py-2 text-right">{{ number_format( $d->TOTDISCAMT,0) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- card body -->
    </div> <!-- card -->  

@endsection

@section('scripts') 
<!-- Page specific script -->
<!-- <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
  </script> -->

  <script>
    $(function () {
      $("#sp01tabel").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true, 
        "filter":false, "paging":false, "bInfo" : false, "ordering":false,
        "buttons": ["excel", "print", "colvis"]
      }).buttons().container().appendTo('#sp01tabel_wrapper .col-md-6:eq(0)');

    });
  </script>


@endsection