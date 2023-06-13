@extends('admin.layout.appadmin')
@section('content')
<table class="table table-striped">
    <tbody>
        <tr>
            <th>No</th>
            <td>{{$pesanan->id}}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{$pesanan->tanggal}}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{$pesanan->nama_pemesan}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{$pesanan->alamat_pemesan}}</td>
        </tr>
        <tr>
            <th>No.HP</th>
            <td>{{$pesanan->no_hp}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$pesanan->email}}</td>
        </tr>
        <tr>
            <th>Jumlah pesanan</th>
            <td>{{$pesanan->jumlah_pesanan}}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{$pesanan->deskripsi}}</td>
        </tr>
        <tr>
            <th>Produk-ID</th>
            <td>{{$pesanan->produk_id}}</td>
        </tr>
    </tbody>
</table>
@endsection