<?php
$user = "root";
$pass = "R4ha5ia";
$host = "localhost";
$dbnm = "sms";

	$koneksi = new mysqli($host,$user,$pass,$dbnm);

	if($koneksi->connect_error){
		die("Koneksi gagal: " . $koneksi->connect_error);
	}
?>