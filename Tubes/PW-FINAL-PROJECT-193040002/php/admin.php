<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$makanan = query("SELECT * FROM makanan_pokok");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $makanan = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Halaman Admin</title>
  <link rel="shortcut icon" type="img/ico" href="../assets/favicon/favicon.ico" id="favicon">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url("../assets/img/bg.jpg");
      background-repeat: no-repeat;
      background-size: 100%;

    }

    .gambar {
      height: 100px;
      border: 3px solid gainsboro;
      border-radius: 20px;
    }

    table {
      background: #f9f9f9;
      border: 3px solid black;
      font-weight: bold;
    }

    .hapus {
      background-color: #C01B1B;
      color: white;
    }

    .ubah {
      background-color: #028A86;
      color: white;
    }
  </style>

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="https://github.com/DavidDTS193040002" style="color: white"><img src="../assets/logo/rice.png" alt="Logo" height="40"> HALAMAN ADMIN</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      </ul>
      <form class="form-inline my-2 my-lg-0" action="" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Pencarian" aria-label="Search" type="text" name="keyword">
        <button class="btn btn-outline-secondary my-2 my-sm-0 bg-dark text-light" type="submit" name="cari">Cari</button>
      </form>
      <ul class="nav nav-pills card-header-pills pl-3">
        <li class="nav-item">
          <a class="nav-link active bg-success ml-1 mr-2" href=" tambah.php">Tambah Data</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link active">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- table -->
  <br>
  <div class="table-responsive m-2" style="block-size: 519px;">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr style="text-align: center;">
          <th>No</th>
          <th>Opsi</th>
          <th>Gambar</th>
          <th>Nama Makanan</th>
          <th>Berat(gr)</th>
          <th>Kalori</th>
          <th>Unit</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($makanan)) : ?>
          <tr>
            <td colspan="7">
              <h1 style="color: red; font-style: italic; text-align: center;">Data tidak ditemukan!</h1>
            </td>
          </tr>
        <?php endif; ?>

        <?php $i = 1; ?>
        <?php foreach ($makanan as $m) : ?>
          <tr style="text-align: center;">
            <td><?= $i++; ?></td>
            <td>
              <a href="ubah.php?id=<?= $m['id']; ?>"><button class="ubah">Ubah</button></a>
              <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus Data?')"><button class="hapus">Hapus</button></a>
            </td>
            <td><img class="gambar" src="../assets/img/<?= $m['gambar']; ?>"></td>
            <td><?= $m['nama_makanan']; ?></td>
            <td><?= $m['berat']; ?></td>
            <td><?= $m['kalori']; ?></td>
            <td><?= $m['unit']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- javascript -->
  <script type="text/javascript" src="java.js"></script>
</body>

</html>