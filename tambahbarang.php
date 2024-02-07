<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mx-auto">
        <form action="fungsi/addbarang.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nama</label>
  <input type="text" class="form-control" name='nama_barang' id="nama_barang" placeholder="nama barang">
      </div>
  <div class="container">
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">harga</label>
  <input type="text" class="form-control" name='harga_barang' id="harga_barang" placeholder="harga barang">
</div>
  <div class="container">
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">stok</label>
  <input type="text" class="form-control" name='stok_barang' id="stok_barang" placeholder="stok barang">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">status</label>
  <select class="form-select" name="status_barang" aria-label="Default select example">
  <option value="1">terpakai</option>
  <option value="2">habis terpakai</option>
</select>
</div>
<button type="submit" name="submit" class="btn btn-primary" >UBAH PENYIMPANAN</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>