<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan_pokok");

if (isset($_POST['cari'])) {
  $makanan = cari($_POST['keyword']);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="shortcut icon" type="img/ico" href="assets/favicon/favicon.ico" id="favicon">
  <title>Makanan Pokok</title>


  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .header {
      background-image: url('assets/img/bg2.jpg');
      background-repeat: no-repeat;
      background-size: 100%;
      font-family: Arial, Helvetica, sans-serif;
    }

    .container {
      width: 280px;
      min-height: 350px;
      border: gainsboro solid 3px;
      background: #6A6861;
      padding: 20px;
      margin: 50px auto;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
      border-radius: 20px;
      color: white;
    }

    a {
      color: white;
    }

    a:link {
      text-decoration: none;
    }

    .container a:hover {
      text-decoration: none;
      color: black;
      background-color: white;
    }

    a:active {
      text-decoration: none;
    }

    h1 {
      text-shadow: 2px 2px black;
      text-align: center;
      font-size: 55px;
      color: white;
    }

    .home p {
      text-align: left;
      font-size: 20px;
      color: white;
      text-shadow: 1px 1px black;
    }

    #daftar {
      background-image: url('assets/img/bg.jpg');
      background-repeat: no-repeat;
      background-size: 150%;
    }

    .nama {
      font-size: 20px;
      font-weight: bold;
    }

    footer p {
      text-align: center;
      font-size: 20px;
      color: white;
      text-shadow: 2px 2px black;
    }

    .keyword {
      border-radius: 10px;
      box-shadow: 2px 2px black;
      background-color: #6A6861;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
      width: 280px;
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

      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-item nav-link active text-light bg-info" href="#home" style="font-size: 20px; font-weight: bold; border-radius: 10px;;"><img src="assets/logo/home.png" alt="Logo" height="40"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light bg-info" href="#daftar" style="font-size: 20px; font-weight: bold; border-radius: 10px; margin-left: 10px; margin-top: 6px;">Daftar Makanan Pokok</a>
        </li>
      </ul>
      <ul class="nav nav-pills card-header-pills pr-5">
        <a class="navbar-brand" href="https://github.com/DavidDTS193040002" style="color: white"><img src="assets/logo/rice.png" alt="Logo" height="30"> by: DAVID</a>
        <li class="nav-item ">
          <a href="php/login.php" class="nav-link active bg-info" style="font-size: 15px; font-weight: bold; border-radius: 10px;"><img src="assets/logo/lock.png" alt="Logo" height="30"> Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- home -->
  <section id="home" class="home">
    <div class="header">
      <div class="row justify-content-center">
        <div class="col-md-4 text-center">
          <br><br><br><br><br>
          <h1 class="display-4"><b>Selamat Datang</b></h1>
          <br>
          <p>Halaman ini menampilkan <b>Daftar Makanan Pokok</b> Makanan pokok (Bahasa Inggris: staple food atau staple saja) adalah makanan yang menjadi gizi dasar. ... Suku bangsa yang secara tradisional merupakan pemburu seperti orang Eskimo menjadikan daging dan ikan sebagai makanan utama.</p>
          <p style="text-align: right;">From: <img src="assets/logo/google.png" alt="Logo" height="20"></p>
          <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
    </div>
  </section>

  <div class="col-md-12 p-5" id="daftar" style="text-align: center;">
    <h1><i class="mr-2"></i>Daftar Makanan Pokok</h1>
    <br>
    <br>
    <form action="" method="POST">
      <input type="text" name="keyword" size="50" placeholder=" Pencarian..." autocomplete="off" class="keyword">
      <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>

    <div class="container">
      <table>
        <?php if (empty($makanan)) : ?>
          <tr>
            <td colspan="4">
              <center>
                <h1 style="color: red; font-style: italic; font-size: large;">Data tidak ditemukan</h1>
              </center>
            </td>
          </tr>
        <?php endif; ?>


        <?php foreach ($makanan as $m) : ?>
          <div class="nama">
            <a href="php/detail.php?id=<?= $m['id']; ?>">
              <?= $m["nama_makanan"]; ?>
            </a>
          </div>
        <?php endforeach; ?>
    </div>
    </table>
  </div>

  <footer>
    <br>
    <div>
      <p align="center">&#169;Copyright &copy 2020. David Dalil T.S. Universitas Pasundan</p>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>