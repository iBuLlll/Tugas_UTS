<?php
    include './koneksi.php';

    $judulBuku = $_POST['judulBuku'];
    $namaPeminjam = $_POST['namaPeminjam'];
    $tanggalPinjam = $_POST['tanggalPinjam'];
    $tanggalKembali = $_POST['tanggalKembali'];
    $statusPeminjaman = $_POST['statusPeminjaman'];

    $query = "INSERT INTO perpus(judulBuku, namaPeminjam, tanggalPinjam, tanggalKembali, statusPeminjaman) VALUES('$judulBuku', '$namaPeminjam', '$tanggalPinjam', '$tanggalKembali', '$statusPeminjaman')";

    mysqli_query($koneksi, $query);

    header("location: ./index.php");

    exit;
?>

