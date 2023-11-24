<!DOCTYPE html>
<html>
<head>
<title>Form Peminjaman Buku</title>
</head>
<body>

<h2>Form Peminjaman Buku</h2>

<form action="proses_input.php" method="post">
  Judul Buku: <input type="text" name="judulBuku" required><br>
  Nama Peminjam: <input type="text" name="namaPeminjam" required><br>
  Tanggal Pinjam: <input type="date" name="tanggalPinjam" required><br>
  Tanggal Kembali: <input type="date" name="tanggalKembali"><br>
  Status Peminjaman: <input type="text" name="statusPeminjaman"><br>
  <input type="submit">
</form>

</body>
</html>
