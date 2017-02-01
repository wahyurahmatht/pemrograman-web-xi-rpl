<?php
	if(!defined("INDEX")) die("---");
	
	session_destroy();
	
	echo"Anda telah keluar";
	echo"<meta http-equiv='refresh' content='1; url=index.php'>";
?>