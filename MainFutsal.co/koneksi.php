<?php 
	$username = "root";
    $password = "";
    $database = "db_mainfutsal";
    $hostname = "localhost";
    $conn = mysqli_connect($hostname,$username,$password,$database);

    if (!$conn) {
    	die("Koneksi gagal : " . mysqli_connect_error());
    } else {
    	echo "Koneksi berhasil";
    }
    
?>