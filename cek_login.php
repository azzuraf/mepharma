<?php

include_once("connection.php");
session_start();

if(isset($_POST['btnsubmit'])){
	$email = $_POST['mailll'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM tb_login_user WHERE email = :email AND password = :password";
	$query = $db->prepare($sql);
	$query->bindparam(':email', $email);
	$query->bindparam(':password', $password);
	$query->execute();
	
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
		$user = $row['email'];
		$pass = $row['password'];
		
		if($user == $email && $pass == $password){
			$_SESSION["username"] = $user;
			$_SESSION["password"] = $pass;
			header( 'Location:index.php' );
		}
		else {
			echo "alert('Gagal')";
		}
	}
}

else if(isset($_POST['btnregis'])){
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