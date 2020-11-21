<?php 
require "koneksi.php";
$namaFile = $_FILES['slider']['name'];
$namaSementara = $_FILES['slider']['tmp_name'];

$gambar="gambar/".$namaFile;
$terupload = move_uploaded_file($namaSementara, $gambar);

$sql="insert into slider (gambar) values (?)";
$stmt=$conn->prepare($sql);
$data=[
$gambar,
];
$stmt->execute($data);
header("location:index.php");
?>