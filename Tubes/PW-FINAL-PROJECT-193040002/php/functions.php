<?php
// function untuk melakukan koneksi ke database
function koneksi()
{

  return mysqli_connect('localhost', 'root', '', 'tubes_193040002');
}

// function untuk melakukan query ke database
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// fungsi upload
function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //         alert('pilih gambar terlebih dahulu!');
    //       </script>";
    return 'nophoto.png';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5mb == 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran terlalu besar!');
          </script>";
    return false;
  }

  // lolos pengecekan
  // siap ipload file
  // generet nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
  $conn = koneksi();

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }
  $nama_makanan = htmlspecialchars($data['nama_makanan']);
  $berat = htmlspecialchars($data['berat']);
  $kalori = htmlspecialchars($data['kalori']);
  $unit = htmlspecialchars($data['unit']);

  $query = "INSERT INTO makanan_pokok
                    VALUES
            (null,'$gambar','$nama_makanan', '$berat', '$kalori', '$unit')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data
function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $m = query("SELECT * FROM makanan_pokok WHERE id = $id")[0];
  if ($m['gambar'] != 'nophoto.png') {
    unlink('../assets/img/' . $m['gambar']);
  }

  mysqli_query($conn, "DELETE FROM makanan_pokok WHERE id = $id");

  return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data
function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);

  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $nama_makanan = htmlspecialchars($data['nama_makanan']);
  $berat = htmlspecialchars($data['berat']);
  $kalori = htmlspecialchars($data['kalori']);
  $unit = htmlspecialchars($data['unit']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'nophoto.png') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE makanan_pokok SET
                gambar = '$gambar'
                nama_makanan = '$nama_makanan', 
                berat = '$berat', 
                kalori = '$kalori', 
                unit = '$unit'
                WHERE id = '$id'
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM makanan_pokok
              WHERE 
              nama_makanan LIKE '%$keyword%'
              ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// registrasi
function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
                alert('username sudah digunakan!');
          </script>";
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru
  $query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
