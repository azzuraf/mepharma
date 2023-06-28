<?php

include("connection.php");

if(isset($_POST['btnregist'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$birthday = $_POST['input'];
	$jk = $_POST['jenis_kelamin'];
	$email = $_POST['mail'];
	$password = $_POST['password'];
	
	$date = str_replace('/', '-', $birthday);
	$tgl =  date('Y-m-d', strtotime($date));  
	
	$sql = "INSERT INTO tb_user (nama, no_telp, tgl_lahir, jk, email, password) VALUES (:nama, :phone, :birth, :jk, :email, :pass)";
	$query = $db->prepare($sql);
	$query->bindparam(':nama', $name);
	$query->bindparam(':phone', $phone);
	$query->bindparam(':birth', $tgl);
	$query->bindparam(':jk', $jk);
	$query->bindparam(':email', $email);
	$query->bindparam(':pass', $password);
	
	if($query->execute()){
		header( 'Location:index.php' );	
	} else {
		echo "<script>alert('Error');</script>";
	}
	
}
?>