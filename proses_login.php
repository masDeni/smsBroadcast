<?php
session_start();
require 'koneksi.php';
$koneksi;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = test_input($_POST['inputId']);
	$password = md5(test_input($_POST['inputPassword']));
	$sql = "SELECT * FROM user WHERE id='$id' and password='$password'";
	$hasil = $koneksi->query($sql);
	if($hasil->num_rows > 0){
		$_SESSION['user'] = $id;
		header('location:index.php');
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>