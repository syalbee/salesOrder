@extends('layout')
@section('container')
<h1 class="h2">{{$title}}</h1>
<br>
<!-- <div class="btn-toolbar mb-2 mb-md-0"> -->
    <table class="table w-100 table-bordered table-hover" id="tblbarang">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
<!-- </div> -->
@endsection

@section('script')
<script type="text/javascript">
    let url,
        barangMasuk = $("#tblbarang").DataTable({
            responsive: !0,
            scrollX: !0,
            ajax: '/getproduk',
            columnDefs: [{
                searcable: !1,
                orderable: !1,
                targets: 0
            }],
            order: [
                [1, "asc"]
            ],
            columns: [{
                    data: "no"
                },
                {
                    data: "KdProduk"
                },
                {
                    data: "NmProduk"
                },
                {
                    data: "HNA"
                },
                {
                    data: "action"
                },
            ],
        });
</script>
@endsection