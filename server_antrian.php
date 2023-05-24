<?php
session_start();

// initializing variables
$errors = array();

// connect to the database
$koneksi = mysqli_connect('localhost', 'root', '', 'puskesmas');

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

// Daftar Nama Antrian
if (isset($_POST['reg_antri'])) {
    // receive all input values from the form
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);
}


if (count($errors) == 0) {
    $query = "INSERT INTO tb_antri (nama, no_telp)
              VALUES('$nama', '$no_telp')";
    mysqli_query($koneksi, $query);
    $_SESSION['success'] = "You are now registered";
    // header('location: login.php');
}

// Ambil nomor antrian terakhir
$query = "SELECT MAX(no_antrian) AS max_antrian FROM tb_antri";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$no_antrian = $row['max_antrian'] + 1;

// Ambil tanggal dan waktu saat ini
$tanggal = date("Y-m-d");
$waktu = date("H:i:s");

// Simpan nomor antrian baru ke database
$query = "INSERT INTO antrian (nomor_antrian, tanggal, waktu) VALUES ('$no_antrian', '$tanggal', '$waktu')";
mysqli_query($koneksi, $query);

// Tampilkan nomor antrian kepada pengunjung
echo "Tanggal: " . $tanggal;
echo "Waktu Daftar Antrian : " . $waktu;
echo "Nomor Antrian Anda: " . $no_antrian;

// Tutup koneksi
mysqli_close($koneksi);
?>
