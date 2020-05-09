<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$mkn = query("SELECT * FROM makanan_pokok WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil Diubah!');
              document.location.href ='admin.php';
            </script>";
  } else {
    echo "<script>
              alert('Data Gagal Diubah!');
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
  <h3>Form Ubah Data Makanan Pokok</h3>
  <form action="" method="POST">

    <input type="hidden" name="id" id="id" value="<?= $mkn['id']; ?>">


    <ul>
      <li>
        <label for="gambar">Gambar :</label><br>
        <input type="text" name="gambar" id="gambar" autofocus required value="<?= $mkn['gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="nama_makanan">Nama Makanan :</label><br>
        <input type="text" name="nama_makanan" id="nama_makanan" required value="<?= $mkn['nama_makanan']; ?>"><br><br>
      </li>
      <li>
        <label for="berat">Berat(gr) :</label><br>
        <input type="text" name="berat" id="berat" required value="<?= $mkn['berat_gr']; ?>"><br><br>
      </li>
      <li>
        <label for="kalori">Kalori :</label><br>
        <input type="text" name="kalori" id="kalori" required value="<?= $mkn['kalori']; ?>"><br><br>
      </li>
      <li>
        <label for="unit">Unit :</label><br>
        <input type="text" name="unit" id="unit" required value="<?= $mkn['unit']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>


  </form>
</body>

</html>