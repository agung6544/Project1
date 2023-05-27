<?php include('server.php');

$acc_username = $_SESSION['username'];
$koneksi = mysqli_connect("localhost","root","","puskesmas");
$acc_query = "SELECT * FROM tb_user WHERE username = '$acc_username'";
$result = mysqli_query($koneksi, $acc_query);

// Fetch the row from the query result
$row = mysqli_fetch_assoc($result);
$nama = $row['nama'];
$id = $row['id'];
$no_telp = $row['no_telp'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Antrian</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <h2>Selamat datang, <?php echo $nama; ?>!</h2>
    <form action="tambah_antri.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" required><br>        
        <input type="hidden" name="no_telp" id="no_telp" value="<?php echo $no_telp; ?>" required><br>        
        <input type="hidden" name="nama" id="nama" value="<?php echo $nama; ?>" required><br>        
            
        <input type="submit" value="Buat Antrian">
    </form>
</body>
</html>
