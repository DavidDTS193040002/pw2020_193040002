<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040002") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_makanan = htmlspecialchars($data['nama_makanan']);
    $berat = htmlspecialchars($data['berat_gr']);
    $kalori = htmlspecialchars($data['kalori']);
    $unit = htmlspecialchars($data['unit']);

    $query = "INSERT INTO
              makanan_pokok
            VALUES
            (null, '$gambar', '$nama_makanan', '$berat', '$kalori', '$unit');
          ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan_pokok WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['gambar']);
    $nama_makanan = htmlspecialchars($data['nama_makanan']);
    $berat = htmlspecialchars($data['berat_gr']);
    $kalori = htmlspecialchars($data['kalori']);
    $unit = htmlspecialchars($data['unit']);

    $query = "UPDATE makanan_pokok
            SET
            gambar = '$gambar',
            nama_makanan = '$nama_makanan',
            berat = '$berat', 
            kalori = '$kalori',
            unit = '$unit',
            WHERE id = '$id'
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cel username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo  "<script>
          alert('Username sudah digunakan!');
        </script>";
        return false;
    }

    // encripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = " INSERT INTO user VALUE('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
