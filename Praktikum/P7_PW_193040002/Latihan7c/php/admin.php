<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

//menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan_pokok WHERE
            nama_makanan LIKE '%keyword%' OR
            berat_gr LIKE '%keyword%' OR
            kalori LIKE '%keyword%' OR
            unit LIKE '%keyword%' ");
} else {
  $makanan = query("SELECT * FROM makanan");
}

//melakukan query
$makanan = query("SELECT * FROM makanan_pokok");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/style3.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <br>
  <div class="add">
    <a href="tambah.php"><button class="tambah">Tambah Data</button></a>
    <a href="logout.php"><button class="logout" style="background-color: lightblue">Logout</button></a>
  </div><br>

  <form action="" method="GET">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>

  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th class="judul" colspan="7">
        <h1>Makanan Pokok</h1>
      </th>
    </tr>
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Berat(gr)</th>
      <th>Kalori</th>
      <th>Unit</th>
    </tr>
    <?php if (empty($makanan)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($makanan as $mkn) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $mkn['id']; ?>"><button class="ubah">Ubah</button></a>
            <a href="hapus.php?id=<? $mkn['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="hapus">Hapus</button></a>
          </td>
          <td><img class="gambar" src="../assets/img/<?= $mkn['gambar']; ?>" height="70" border="2"></td>
          <td><?= $mkn['nama_makanan']; ?></td>
          <td><?= $mkn['berat_gr']; ?></td>
          <td><?= $mkn['kalori']; ?></td>
          <td><?= $mkn['unit']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>