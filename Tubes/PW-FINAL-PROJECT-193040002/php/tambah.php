<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  }
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

  <title>Form Tambah Daftar Makanan Pokok</title>
  <link rel="shortcut icon" type="img/ico" href="../assets/favicon/favicon.ico" id="favicon">

  <style>
    body {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      background-image: url("../assets/img/bg.jpg");
      background-repeat: no-repeat;
      background-size: 150%;
    }

    .container {
      width: 350px;
      min-height: 350px;
      border: #CCC solid 1px;
      background: #f9f9f9;
      padding: 20px;
      margin: 20px auto;
      box-shadow: 0 2px 7px rgba(0, 0, 0, 0.1);
      border-radius: 18px;
      border: 3px solid gainsboro;
    }

    h3 {
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="tambah">
          <h3><i class="fa fa-key fa-fw"></i>Form Tambah Daftar Makanan Pokok</h3>
          <hr>

          <!-- start form tambah -->
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-group">
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" class="gambar" onchange="previewImage()">
              </div>
              <img src="../assets/img/nophoto.png" width="120" style="display: block;" class="img-preview">
            </div>
            <div class="form-group">
              <div class="form-group">
                <label for="nama_makanan">Nama Makanan Pokok :</label>
                <input type="text" class="form-control" name="nama_makanan" id="nama_makanan" required autofocus autocomplete="off">
              </div>
              <div class="form-group">
                <label for="berat">Berat(gr) :</label>
                <input type="text" class="form-control" name="berat" id="berat" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="kalori">Kalori :</label>
                <input type="text" class="form-control" name="kalori" id="kalori" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="unit">Unit :</label>
                <input type="text" class="form-control" name="unit" id="unit" required autocomplete="off">
              </div>
              <hr>
              <button type="submit" class="btn btn-primary bg-info" name="tambah">Tambah Data!</button>
              <button type="submit" class="btn btn-dark bg-secondary">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  <!-- javascript -->
  <script type="text/javascript" src="java.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>