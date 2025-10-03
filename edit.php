<?php include "koneksi.php"; 
$id = $_GET['id'];
$catatan = $conn->query("SELECT * FROM catatan WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Catatan</title></head>
<body>
<h2>Edit Catatan</h2>
<form method="post">
    Judul: <input type="text" name="judul" value="<?= $catatan['judul']; ?>" required><br><br>
    Isi: <textarea name="isi" required><?= $catatan['isi']; ?></textarea><br><br>
    Tanggal: <input type="date" name="tanggal" value="<?= $catatan['tanggal']; ?>" required><br><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $conn->query("UPDATE catatan SET judul='$judul', isi='$isi', tanggal='$tanggal' WHERE id=$id");
    header("Location: index.php");
}
?>
</body>
</html>
