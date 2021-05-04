<?php 
include "koneksi.php";

$stmt = $db->prepare("INSERT INTO nama_tabel (ipk1, ipk2, ipk3) VALUES (?,?,?)");
$stmt->bind_param("sss",$_POST['ipk1'], $_POST['ipk2'], $_POST['ip3']);
$stmt->execute();
$stmt->close();
header("location:index.php");
?>