<?php
$koneksi = mysqli_connect("localhost","root","","puskesmas");
$sql = "SELECT MAX(no_antrian) AS max_no_antrian FROM tb_antri WHERE tanggal = CURDATE()";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$max_no_antrian = $row['max_no_antrian'];
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
      <p id="nomor"><?php echo  $max_no_antrian ; ?></p>
      <h4>Tanggal :</h4>
      <p id="tanggal"><?php echo  $tanggal ; ?></p>
    </div>
    <script>
        window.print()
    </script>
  </body>
</html>