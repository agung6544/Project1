<?php include('server_antrian.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Antrian</title>
</head>
<body>
    <h2>Formulir Pendaftaran Antrian</h2>
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>
        
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" name="no_telp" id="telepon" required><br>
        
        <input type="submit" nama="reg_antri" value="Daftar Antrian">
    </form>
</body>
</html>