<?php
$koneksi = mysqli_connect("localhost","root","","puskesmas");
$antri_query="SELECT MAX(no_antrian) as max_antri FROM tb_antri";
$result = mysqli_query($koneksi, $antri_query);
$row = mysqli_fetch_assoc($result);
$maxQueue = $row['max_antri'] ;
$tanggal = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/cetak.css" />
    <title>Cetak Antrian</title>
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
        <li><a href="index.php">Beranda</a></li>
        <li><a href="login.php">Log in</a></li>
      </ul>
    </nav>
    <div class="container">
      <h4>Nomor Antrian :</h4>
      <p><?php echo  $maxQueue ; ?></p>
      <h4>Tanggal :</h4>
      <p><?php echo  $tanggal ; ?></p>
      <br>
      <a href="user.php"><button href="user.php">Kembali</button></a>
      <a href="print.php"> <button>Cetak</button></a>
    </div>
  </body>
</html>