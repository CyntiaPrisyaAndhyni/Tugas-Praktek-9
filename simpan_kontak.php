<?php
include ("admin/koneksi.inc.php");

if (isset ($_POST["simpan"])){

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$nama=$_POST['nama'];
$jkel=$_POST['jkel'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$pesan=$_POST['pesan'];

$sql="insert kontak set nama='$nama',
                        jkel='$jkel', 
                        email='$email', 
                        alamat='$alamat', 
                        kota='$kota', 
                        pesan='$pesan'";

$simpan=mysqli_query($conn,$sql); 

header("location:kontak.html");
}
?>