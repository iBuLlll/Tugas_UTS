<?php
    $koneksi = mysqli_connect("localhost", "root", "", "perpus");
    
    if (!$koneksi) {
        echo "<script>alert('koneksi database gagal');</script>";
    }
?>
