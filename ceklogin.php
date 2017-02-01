<?php
	session_start();
	
	include("lib/koneksi.php");
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$cek 	= mysql_query("select * from user where username='$username' and password='$password'");
	$data	= mysql_fetch_array($cek);
	$jumlah = mysql_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		
		echo"<br><br><br><br><br><br><br><center>Mohon Tunggu 5 Detik, Username Dan Password Sedang Diperiksa<br><br><br><img src='panel.gif'></center>";
		echo"<meta http-equiv='refresh' content='1; url=dasboard.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br><img src='eror.gif'><br><b><a href='index.php'><br><button>ULANGI</button></a></b></center>";
	}
?>