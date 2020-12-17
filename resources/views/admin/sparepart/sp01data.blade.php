@extends('admin.sparepart.sp01')

@section('konten')
        
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cari : {{ $partno }}<br/></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="sp01tabel" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="border px-4 py-2 bg-gray-200">Cabang</th>
                        <th class="border px-4 py-2 bg-gray-200">Partno</th>
                        <th class="border px-4 py-2 bg-gray-200">PartName</th>
                        <th class="border px-4 py-2 bg-gray-200">Harga</th>
                        <th class="border px-4 py-2 bg-gray-200">Stok</th>
                    </tr>
                </thead>
                <tbody>
            
                    @foreach($data as $d)
                    <tr>
                        <td class="border px-4 py-2 ">{{ $d->Cbg }}</td>
                        <td class="border px-4 py-2 ">
                          <a href="/sp01/filter?cari={{ $d->partno }}&cbg={{ $cbg }}&ho={{ $ho }}">
                            {{ $d->partno }}
                          </a></td>
                        <td class="border px-4 py-2 text-nowrap">{{ $d->partname }}</td>
                        <td class="border px-4 py-2 text-right">{{ number_format($d->harga,0) }}</td>
                        <td class="border px-4 py-2 text-right">{{ number_format($d->onHand,0) }}</td>
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
        "responsive": true, "lengthChange": true, "autoWidth": false, 
        "filter":false, "paging":false, "bInfo" : false, "no-sort"
      });

    });
  </script>


@endsection