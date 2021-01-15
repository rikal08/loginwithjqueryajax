<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query= mysqli_query($koneksi,"SELECT * FROM login WHERE username ='$username' AND password='$password'");
$cekquery=mysqli_num_rows($query);
if ($cekquery > 0) {
	$data = mysqli_fetch_array($query);
	$_SESSION['id'] = $data['id'];
	$_SESSION['nama'] = $data['nama'];

	 echo "oke";
}else{
	 header("location:index.php");
}




 ?>