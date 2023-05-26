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
  <body>
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