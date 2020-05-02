<?php
require 'php/functions.php';
$makanan = query("SELECT * FROM makanan_pokok");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Makanan Pokok</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="container">
    <h1>
      <center>Makanan Pokok</center>
    </h1>
    <?php foreach ($makanan as $mkn) : ?>
      <p>
        <a href="php/detail.php?id=<?= $mkn['id'] ?>">
          <?= $mkn["nama_makanan"] ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>
</body>

</html>