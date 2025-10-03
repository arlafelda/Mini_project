<?php include "koneksi.php"; 
$id = $_GET['id'];
$conn->query("DELETE FROM catatan WHERE id=$id");
header("Location: index.php");
?>
