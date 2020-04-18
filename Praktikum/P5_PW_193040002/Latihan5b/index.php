<?php
require 'php/functions.php';
$makanan_pokok = query("SELECT * FROM makanan_pokok");
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

    <?php $i = 1; ?>
    <?php foreach ($makanan_pokok as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        </td>
        <td><img src="assets/img/<?= $row["gambar"]; ?>" height="70"></td>
        <td><?= $row["nama_makanan"]; ?></td>
        <td><?= $row["berat_gr"]; ?></td>
        <td><?= $row["kalori"]; ?></td>
        <td><?= $row["unit"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>


</body>

</html>