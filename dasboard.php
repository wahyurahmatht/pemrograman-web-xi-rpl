<?php
	session_start();
	
	if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
		include("lib/koneksi.php");
		define("INDEX",true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/skins/skin-red.min.css">
</head>

<body class="hold-transition skin-red sidebar-mini">

<div class="wrapper">

	<header class="main-header">
		<a href="#" class="logo">		
		<span class="logo-mini"><b>T</b>S</span>		
		<span class="logo-lg"><b>TELKOM</b> SCHOOL</span>
		</a>

		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">

					<li><a href="?tampil=keluar"><i class="fa fa-sign-out"></i> Keluar</a></li>					
				</ul>
			</div>
		</nav>
	</header>


	<aside class="main-sidebar">
		<section class="sidebar">
			<?php include("sidebar.php"); ?> 
		</section>
	</aside>


	<div class="content-wrapper">	
		<section class="content-header">
			
		</section>
		<section class="content">
			<?php include("konten.php"); ?> 
		</section>
	</div>

	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		Webmaster : Nama
		</div>
		<strong>Copyright &copy; 2017 <a href="#">SMK Telkom Lampung</a>.</strong> All rights reserved.
	</footer>
 
</div>

<script src="js/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/app.min.js"></script>
</body>
</html>

<?php
	}else{
		echo"<br><br><br><br><br><br><br><center>Login dulu mas bro, minta buatin username sama password nya ke webmasternya, oke<br><br><br><img src='warning.gif'></center>";
		echo"<meta http-equiv='refresh' content='5; url=index.php'>";
	}
?>