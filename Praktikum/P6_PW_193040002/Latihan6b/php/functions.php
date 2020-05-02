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
