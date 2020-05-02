<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil Ditambahkan!');
              document.location.href ='admin.php';
            </script>";
  } else {
    echo "<script>
              alert('Data Gagal Ditambahkan!');
              document.location.href ='admin.php';
          </script>";
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Form Tambah Data Makanan Pokok</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="gambar">Gambar :</label><br>
        <input type="text" name="gambar" id="gambar" autofocus required><br><br>
      </li>
      <li>
        <label for="nama_makanan">Nama Makanan :</label><br>
        <input type="text" name="nama_makanan" id="nama_makanan" required><br><br>
      </li>
      <li>
        <label for="berat">Berat(gr) :</label><br>
        <input type="text" name="berat" id="berat" required><br><br>
      </li>
      <li>
        <label for="kalori">Kalori :</label><br>
        <input type="text" name="kalori" id="kalori" required><br><br>
      </li>
      <li>
        <label for="unit">Unit :</label><br>
        <input type="text" name="unit" id="unit" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>


  </form>
</body>

</html>