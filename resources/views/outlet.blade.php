@extends('layout')
@section('container')
<h1 class="h2">{{$title}}</h1>
<br>
<!-- <div class="btn-toolbar mb-2 mb-md-0"> -->
    <table class="table w-100 table-bordered table-hover" id="tbloutlet">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Kode Outlet</th>
                <th>Nama Outlet</th>
                <th>Alamat Outlet</th>
                <th>Status Outlet</th>
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
        barangMasuk = $("#tbloutlet").DataTable({
            responsive: !0,
            scrollX: !0,
            ajax: '/getoutlet',
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
                    data: "KdOutlet"
                },
                {
                    data: "NmOutlet"
                },
                {
                    data: "Alamat"
                },
                {
                    data: "Status"
                },
                {
                    data: "action"
                },
            ],
        });
</script>
@endsection