<?php 
require "koneksi.php";
$khotib=$_POST['khotib'];
$imam=$_POST['imam'];
$muadzin=$_POST['muadzin'];
$sql="update masjid set khotib=?,imam=?,muadzin=? where (id=?)";
$stmt=$conn->prepare($sql);
$data=[
$khotib,
$imam,
$muadzin,
1
];
$stmt->execute($data);
header("location:index.php");
?>