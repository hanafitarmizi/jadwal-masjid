<?php
$conn=new PDO('mysql:host=localhost;dbname=dbs_masjid','root','');

if ($conn) {
	echo "koneksi berhasil";
}
else {
	echo "koneksi gagal";
}

?>