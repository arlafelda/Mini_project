<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pencatatan Harian</title>
</head>
<body>
<h2>📒 Daftar Catatan</h2>
<a href="tambah.php">+ Tambah Catatan</a>
<hr>

<?php
$result = $conn->query("SELECT * FROM catatan ORDER BY tanggal DESC");
while($row = $result->fetch_assoc()):
?>
    <h3><?= $row['judul']; ?> (<?= $row['tanggal']; ?>)</h3>
    <p><?= $row['isi']; ?></p>
    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
    <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    <hr>
<?php endwhile; ?>

</body>
</html>
