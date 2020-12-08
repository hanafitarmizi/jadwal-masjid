<?php 
require "koneksi.php";
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from masjid where (email=?)";
$stmt=$conn->prepare($sql);
$stmt->execute([$email]);
$result=$stmt->fetchAll();


if (count($result)>0){
	if ($result[0]['password']==sha1($password)){
		$_SESSION['email']=$email;
		header('Location:index.php');

	}
	else{
		$_SESSION['error']="Email atau Password Salah";
	header('Location:login.php');

	}

}
else {
	$_SESSION['error']="Email atau Password Salah";
	header('Location:login.php');
}



?>