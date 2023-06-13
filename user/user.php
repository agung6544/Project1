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
<style>
    /* Navbar Styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #fff;
  height: 80px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 9999;
}

.navbar-logo {
  font-size: 2rem;
  font-weight: bold;
  color: #008080;
  margin-left: 20px;
}

.navbar-menu {
  display: flex;
  align-items: center;
  list-style: none;
  margin-right: 20px;
}

.navbar li {
  margin: 0 10px;
}

.navbar a {
  color: #008080;
  text-decoration: none;
  font-size: 1rem;
  font-weight: bold;
  transition: color 0.3s ease-in-out;
}

.navbar a:hover {
  color: #ffcc00;
}
   </style>
<body>
<nav class="navbar">
      <h1 class="navbar-logo">Puskesmas XYZ</h1>
      <ul class="navbar-menu">
        <li><a href="../index.php">Beranda</a></li>
      </ul>
    </nav>
    <div style="margin-top: 10%;">
    <h2>Selamat datang, <?php echo $nama; ?>!</h2>
    <form action="tambah_antri.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" required><br>        
        <input type="hidden" name="no_telp" id="no_telp" value="<?php echo $no_telp; ?>" required><br>        
        <input type="hidden" name="nama" id="nama" value="<?php echo $nama; ?>" required><br>        
            
        <input type="submit" value="Buat Antrian">
    </form>
    </div>
</body>
</html>
