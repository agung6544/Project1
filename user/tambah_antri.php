<?php 

$koneksi = mysqli_connect("localhost","root","","puskesmas");

// Check connection
if (mysqli_connect_errno()){
	echo "Database connection error! : " . mysqli_connect_error();
}


// Buat no antri
$antri_query = "SELECT MAX(no_antrian) as max_queue FROM tb_antri";
$result = mysqli_query($koneksi, $antri_query);
$row = mysqli_fetch_assoc($result);
$maxQueue = $row['max_queue'] + 1;


// Define input variables
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$no_antrian = $maxQueue;
$tanggal = date("Y-m-d");
$waktu = date("H:i:s");

// Add data to databse using query
mysqli_query($koneksi,"insert into tb_antri values('','$no_antrian','$tanggal','$waktu','$nama','$no_telp')");

$color = "red";
$fontSize = "20px";

// Redirect back to homepage
header("location:cetak.php");

?>