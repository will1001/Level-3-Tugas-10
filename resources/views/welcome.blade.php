<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arkademy CRUD</title>

        

        <!-- Styles -->
        <style>
            td{
                text-align: center;
            }            
        </style>
    </head>
    <body>
        <h1>Arkademy Level 3 Tugas 10</h1>
        <table style="width:100%">
            <tr>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th></th>
            </tr>
            @foreach($produks as $produk)
            <tr>
                <td>{{$produk->nama_produk}}</td>
                <td>{{$produk->keterangan}}</td>
                <td>{{$produk->harga}}</td>
                <td>{{$produk->jumlah}}</td>
                <td><a href="/EditForm/{{$produk->nama_produk}}">Edit</a> || <a href="/Delete/{{$produk->nama_produk}}">Delete</a></td>
            </tr>
           @endforeach
        </table>
        <a href="/AddForm">Add Data</a>
    </body>
</html>
