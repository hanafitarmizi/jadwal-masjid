<?php 
require "koneksi.php";
$id=$_GET['id'];
$sql="delete from running_text where id=?";
$stmt=$conn->prepare($sql);
$stmt->execute([$id]);
header("location:index.php");
?>