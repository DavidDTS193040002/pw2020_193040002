<?php
//menghubungkan dengan file php lainnya
require 'functions.php';

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
    <?php $i = 1; ?>
    <?php foreach ($makanan as $mkn) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button class="ubah">Ubah</button></a>
          <a href=""><button class="hapus">Hapus</button></a>
        </td>
        <td><img class="gambar" src="../assets/img/<?= $mkn['gambar']; ?>" height="70" border="2"></td>
        <td><?= $mkn['nama_makanan']; ?></td>
        <td><?= $mkn['berat_gr']; ?></td>
        <td><?= $mkn['kalori']; ?></td>
        <td><?= $mkn['unit']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>