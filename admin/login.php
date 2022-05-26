<?php 
session_start();

// untuk menghubungkan dengan database
include "koneksi.inc.php";


// menampung data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['Username'] = $username;
	$_SESSION['status'] = "login";
	header("location:cetak.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>  