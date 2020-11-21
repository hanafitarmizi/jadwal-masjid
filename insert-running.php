<?php 
require "koneksi.php";
$nama=$_POST['judul'];
$isi=$_POST['isi'];
$sql="insert into running_text (judul,isi) values (?,?)";
$stmt=$conn->prepare($sql);
$data=[
$nama,
$isi
];
$stmt->execute($data);
header("location:index.php");
?>