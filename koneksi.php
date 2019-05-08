<?php
$server ="localhost"; //server 
$username="root";// username pakai root saya
$password="";//password kosingin aja
$database="multi_login";// nama database
$conn = mysqli_connect($server, $username, $password);
	if ($conn) {
	
		mysqli_select_db($conn,$database) or die ("Berhasil");
	}else{
		echo "Gagal";
	}
?>