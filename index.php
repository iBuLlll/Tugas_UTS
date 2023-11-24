<!DOCTYPE html>
<html>
<head>
<title>Form Peminjaman Buku</title>
</head>
<body>

<h2>Form Peminjaman Buku</h2>

<form action="./tambahbuku.php" method="post">
  <label for="judul_Buku">Judul_Buku</label>
  <input type="text" name="judulBuku" required><br>
  <label for="nama_Peminjam">Nama_Peminjam</label>
  <input type="text" name="namaPeminjam" required><br>
  <label for="tanggal_Pinjam">Tanggal_Pinjam</label>
  <input type="date" name="tanggalPinjam" required><br>
  <label for="tanggal_Kembali">tanggal_Kembali</label>
  <input type="date" name="tanggalKembali"><br>
  <label for="status_Peminjaman">status_Peminjaman</label>
  <input type="text" name="statusPeminjaman"><br>
  <input type="submit">
</form>

</body>
</html>
