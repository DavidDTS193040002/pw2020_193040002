<?php

require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil!');
              document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal!');
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

  <title>Halaman Registrasi</title>
  <link rel="shortcut icon" type="img/ico" href="../assets/favicon/favicon.ico" id="favicon">

  <style>
    body {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      background-image: url("../assets/img/bg.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
    }

    .container {
      width: 350px;
      min-height: 350px;
      border: #CCC solid 1px;
      background: #f9f9f9;
      padding: 20px;
      margin: 100px auto;
      box-shadow: 0 2px 7px rgba(0, 0, 0, 0.1);
      border-radius: 20px;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="registrasi">
          <h1><i class="fa fa-key fa-fw"></i>REGISTRASI</h1>
          <hr>

          <!-- start form registrasi -->
          <form action="" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" autofocus autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <div class="input-group  input-group-sm">
                <input type="password" class="form-control" name="password" autocomplete="off" required>
              </div>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit" name="register">Registrasi</button>
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
</body>

</html>