<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('Registrasi Berhasi!');
          document.location.href = 'login.php';  
        </script>";
  } else {
    echo  "<script>
          alert('Registrasi Gagal!');
        </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <form action="" method="POST">
    <table>
      <tr>
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input type="text" name="username" autofocus autocomplete="off" required></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password" autocomplete="off" required></td>
      </tr>
    </table>
    <button type="submit" name="register" style="background-color: lightblue">REGISTER</button>
  </form>
</body>

</html>