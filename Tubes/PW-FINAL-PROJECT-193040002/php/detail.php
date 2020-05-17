<?php

// Mengecaek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$mkn = query("SELECT * FROM makanan_pokok WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Detail</title>
  <link rel="shortcut icon" type="img/ico" href="../assets/favicon/favicon.ico" id="favicon">

  <style>
    body {
      background-image: url("../assets/img/bg.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
      font-family: Arial, Helvetica, sans-serif;
    }

    img {
      width: 300px;
      border-radius: 20px;
    }

    .container {
      width: 350px;
      min-height: 350px;
      border: gainsboro solid 3px;
      background: #f9f9f9;
      padding: 20px;
      margin: 50px auto;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
      border-radius: 20px;
    }

    li {
      font-weight: bold;
    }

    .cpr {
      color: white;
      text-shadow: 3px 2px 1px black;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <img src="../assets/img/<?= $mkn['gambar']; ?>" width="250">
        <div class="card-body">
          <div class="keterangan">
            <ul class="list-group list-group-flush" style="text-align: center;">
              <li class="list-group-item">
                <p><?= $mkn['nama_makanan']; ?></p>
              </li>
              <li class="list-group-item">
                <p>Berat(gr) : <?= $mkn['berat']; ?></p>
              </li>
              <li class="list-group-item">
                <p>Kalori : <?= $mkn['kalori']; ?></p>
              </li>
              <li class="list-group-item">
                <p>Unit : <?= $mkn['unit']; ?></p>
              </li>
            </ul>
          </div>
          <a href="../index.php" class="btn btn-secondary btn-sm btn-block" style="border-radius: 10px;">Kembali</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
  <br>
  <footer>
    <div class="cpr">
      <p align="center">&#169;Copyright &copy 2020. David Dalil T.S. Universitas Pasundan</p>
    </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- javascript -->
  <script type="text/javascript" src="java.js"></script>
</body>

</html>