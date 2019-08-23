@extends('layouts/admin/master-admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tabel pengamatan pH</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabel_ph" class="display table table-striped table-hover table-bordered" >
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pH as $p) 
                    <tr>
                            <td>{{date('Y-m-d', strtotime($p->waktu))}}</td>
                            <td>{{date('h:i:s', strtotime($p->waktu))}}</td>
                            <td>{{$p->nilai}}</td>
                            @if ($p->nilai < '6.5')
                            <td>Tidak Aman</td>                  
                            @elseif($p->nilai > '8.5')
                            <td>Tidak Aman</td>
                            @else
                                <td>Aman</td>
                            @endif 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src= "https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src= "https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
			$('#tabel_ph').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel'
                ],
                aaSorting: [[0, 'desc']]
            });
        });
    </script>
    <script>
        // var table = $('#tabel_ph').DataTable();
        window.setInterval("update()", 10000);
        var update = function(){
            $.ajax({
				type: 'get',
                url: url[2],
                success:function(data) {                   
                    var angka = parseFloat(data['nilai']);
                    console.log(angka);
                    if(angka < 6.5) {
                        var text = data['nilai'].toString();
                        swal({
                            title: "Konidisi pH tidak normal",
                            text: text,
                            icon : "error",
                            buttons: true,
                            dangerMode: true,
                        }).then((data) => {
                                location.reload();
                            });
                    }
                    else if(angka > 8.5) {
                        var text = data['nilai'].toString();
                        swal({
                            title: "Konidisi pH tidak normal",
                            text: text,
                            icon : "error",
                            buttons: true,
                            dangerMode: true,
                        }).then((data) => {
                                location.reload();
                            });
                    }
                    else{
                        alert('data aman');
                        location.reload();
                    }
                }
            })
        }
    
    </script>

@endsection