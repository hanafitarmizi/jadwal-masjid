<?php 
require "koneksi.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$hp=$_POST['nohp'];
$lo=$_POST['lo'];
$ln=$_POST['ln'];
$iqomah=$_POST['iqomah'];

$sql="update masjid set nama=?,alamat=?,hp=?,lo=?,ln=?,iqomah=? where (id=?)";
$stmt=$conn->prepare($sql);
$data=[
$nama,
$alamat,
$hp,
$lo,
$ln,
$iqomah,
1
];

$stmt->execute($data);

header("location:index.php");
?>