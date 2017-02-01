<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";
	
	if( $tampil == "beranda" )		include("beranda.php");	
	elseif( $tampil == "keluar" )	include("keluar.php");

	elseif( $tampil == "siswa")					include("siswa/siswa_show.php");
	elseif( $tampil == "siswa_tambah")			include("siswa/siswa_tambah.php");
	elseif( $tampil == "siswa_tambahproses")	include("siswa/siswa_tambahproses.php");
	elseif( $tampil == "siswa_edit")			include("siswa/siswa_edit.php");
    elseif( $tampil == "siswa_editproses")		include("siswa/siswa_editproses.php");
    elseif( $tampil == "siswa_hapus")	    	include("siswa/siswa_hapus.php");
	
	else echo"Konten tidak ada";
?>