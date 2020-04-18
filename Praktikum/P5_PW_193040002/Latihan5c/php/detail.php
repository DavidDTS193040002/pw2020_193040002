<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$mkn = query("SELECT * FROM makanan_pokok WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>document</title>
  <link rel="stylesheet" href="../css/style2.css">
</head>

<body>
  <div class="container">
    <img src="../assets/img/<?= $mkn["gambar"]; ?>" height="70">

    <p>Berat(gr): <?= $mkn["berat_gr"]; ?></p>
    <p>Kalori: <?= $mkn["kalori"]; ?></p>
    <p>Unit: <?= $mkn["unit"]; ?></p>

    <button class="tombol_kembali"> <a href="../index.php">kembali</a> </button>
  </div>
</body>

</html>