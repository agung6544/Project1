<?php

$koneksi = mysqli_connect("localhost", "root", "", "puskesmas");

// Check connection
if (mysqli_connect_errno()) {
    echo "Database connection error! : " . mysqli_connect_error();
    exit();
}

// Define input variables
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$waktu = date("H:i:s");
$tanggal = date("Y-m-d");

// Buat no antri
$sql = "SELECT MAX(no_antrian) AS max_no_antrian FROM tb_antri WHERE tanggal = CURDATE()";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$max_no_antrian = $row['max_no_antrian'];

$new_no_antrian = $max_no_antrian + 1;

// Add data to database if not duplicate
$insertQuery = "INSERT INTO tb_antri (no_antrian, tanggal, waktu, nama, no_telp) 
               SELECT '$new_no_antrian', '$tanggal', '$waktu', '$nama', '$no_telp'
               FROM dual 
               WHERE NOT EXISTS (
                   SELECT * FROM tb_antri WHERE tanggal = '$tanggal' AND nama = '$nama' AND no_telp = '$no_telp'
               )";

mysqli_query($koneksi, $insertQuery);

$color = "red";
$fontSize = "20px";

// Redirect back to homepage
header("location:cetak.php");
exit();
?>