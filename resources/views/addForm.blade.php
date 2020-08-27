<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkademy CRUD</title>
</head>
<body>

<h1>Arkademy CRUD Add Data</h1>

<form action="/AddData" method="post">
    {{csrf_field()}}

    <label for="nama_produk">Nama Produk</label>
    <input class="" type="text" name="nama_produk" id="nama_produk"  placeholder="Nama Produk">
    <br>
    <br>
    <label for="keterangan">Keterangan</label>
    <input class="" type="text" name="keterangan" id="keterangan"  placeholder="Keterangan">
    <br>
    <br>
    <label for="harga">Harga</label>
    <input class="" type="number" name="harga" id="harga"  placeholder="Harga">
    <br>
    <br>
    <label for="jumlah">Jumlah</label>
    <input class="" type="number" name="jumlah" id="jumlah"  placeholder="Jumlah">
    <br>
    <br>


    <button type="submit">submit</button>
</form>
    
</body>
</html>