<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Catatan</title></head>
<body>
<h2>Tambah Catatan</h2>
<form method="post">
    Judul: <input type="text" name="judul" required><br><br>
    Isi: <textarea name="isi" required></textarea><br><br>
    Tanggal: <input type="date" name="tanggal" required><br><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $conn->query("INSERT INTO catatan (user_id, judul, isi, tanggal) VALUES (1, '$judul', '$isi', '$tanggal')");
    header("Location: index.php");
}
?>
</body>
</html>
