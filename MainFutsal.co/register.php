<?php

require 'koneksi.php';

$nama_customer = $_POST["nama_customer"];
$email_customer = $_POST["email_customer"];
$password_customer = $_POST["password_customer"];
$no_telp_customer = $_POST["no_telp_customer"];

$query_sql = "INSERT INTO customer (nama_customer, email_customer, password_customer, no_telp_customer) VALUES ('$nama_customer', '$email_customer', '$password_customer', '$no_telp_customer')";

if (mysqli_query($conn, $query_sql)) {
	header("Location: masuk.html");
} else {
	echo "Pendaftaran gagal: " . mysqli_error($conn);
}

?>