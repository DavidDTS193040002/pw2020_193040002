<?php
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan_pokok WHERE
            nama_makanan LIKE '%keyword%' ");
} else {
  $makanan = query("SELECT * FROM makanan");
}

$makanan = query("SELECT * FROM makanan_pokok");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Makanan Pokok</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <form action="" method="GET">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <div class="container">
    <h1>
      <center>Makanan Pokok</center>
    </h1>
    <?php if (empty($makanan)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php foreach ($makanan as $mkn) : ?>
        <p><button class="makanan">
            <a href="php/detail.php?id=<?= $mkn['id'] ?>">
              <?= $mkn["nama_makanan"] ?>
            </a>
          </button></p>
      <?php endforeach; ?>
      <br>
      <button class="admin"><a href="php/login.php" class="foradmin">Masuk ke halaman Admin</a></button>
    <?php endif; ?>
  </div>
</body>

</html>