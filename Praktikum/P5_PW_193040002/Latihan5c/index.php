<?php
require 'php/functions.php';
$makanan = query("SELECT * FROM makanan_pokok");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Makanan Pokok</h1>
  <div class="container">
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