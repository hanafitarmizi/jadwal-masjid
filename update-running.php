<?php 
require "koneksi.php";
$nama=$_POST['judul'];
$isi=$_POST['isi'];
$id=$_POST['id'];
$sql="update running_text set judul=?,isi=? where id=?";
$stmt=$conn->prepare($sql);
$data=[
$nama,
$isi,
$id
];
$stmt->execute($data);
header("location:index.php");
?>