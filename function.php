<?php 

	echo "PHP Day 05 - Belajar PHP MyAdmin";

	$servername = "localhost";
	$username = "root";
	$password = "";

	// Konek Database
	$koneksi = mysqli_connect($servername, $username, $password);

	if(!$koneksi)
	{
		echo "<br> Koneksi Database Gagal!";
		die;
	}
	
	

	// $query = "CREATE database db_05_01";
	// error_reporting(0);
	// if(mysqli_query($koneksi, $query)){
	// 	echo "Buat Database Berhasil";
	// } else {
	// 	echo "Database Gagal" . mysqli_error($koneksi);
	// }

	echo "<br> Koneksi Berhasil";



 ?>