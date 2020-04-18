<?php

$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");


mysqli_select_db($conn, "tubes_193040002") or die("Database salah!");


$makanan = mysqli_query($conn, "SELECT * FROM makanan_pokok");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makanan Pokok</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <h1>Makanan Pokok</h1>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Berat(gr)</th>
      <th>Kalori</th>
      <th>Unit</th>
    </tr>

    <?php while ($mkn = mysqli_fetch_assoc($makanan)) : ?>
      <tr>
        <td><?= $mkn["id"]; ?></td>
        <td><img src="assets/img/<?= $mkn["gambar"] ?>" height="70"></td>
        <td><?= $mkn["nama_makanan"]; ?></td>
        <td><?= $mkn["berat_gr"]; ?></td>
        <td><?= $mkn["kalori"]; ?></td>
        <td><?= $mkn["unit"]; ?></td>

      </tr>
    <?php endwhile; ?>

  </table>

</body>

</html>