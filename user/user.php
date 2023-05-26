<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Antrian</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <h2>Formulir Pendaftaran Antrian</h2>
    <form action="tambah_antri.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>
        
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" name="no_telp" id="telepon" required><br>
        
        <input type="submit" value="Daftar Antrian">
    </form>
</body>
</html>