<?php 
require 'koneksi.php';

$email_customer = $_POST["email_customer"];
$password_customer = $_POST["password_customer"];

$query_sql = "SELECT * FROM customer WHERE email_customer = '$email_customer' AND password_customer = '$password_customer'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
	header("Location: beranda_customer.html");
} else {
	echo "<center> <h1> Email atau Password Anda Salah, Silahkan Coba Login Kembali! </h1> <button> <strong> <a href='masuk.html'> Login </a> </strong> </center>";
}

?>