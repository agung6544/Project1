<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="../css/regist.css">
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
          <h1>Daftar Akun</h1>
          <form action="" method="post">
        <label>Username</label>
            <input id="username" type="text" class="form-control" name="username" placeholder="Username">

        <label>E-Mail</label>
            <input id="email" type="text" class="form-control" name="email" placeholder="E-Mail">

        <label>Password</label>
            <input id="password_1" class="form-control" name="password_1" type="password" placeholder="Password">

        <label>Ulang Password</label>
            <input id="password_2" class="form-control" name="password_2" type="password" placeholder="Konfirmasi Password">


        <label >NIK KTP <sup>*</sup></label>
            <input type="text"  pattern="[0-9]+" id="nik" name="nik" class="form-control"  placeholder="NIK KTP" >

        <label >Nama <sup>*</sup></label>
           <input type="text" id="nama" name="nama" class="form-control"  placeholder="Nama" >

        <label >Jenis Kelamin</label>
          <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
          <option>Pilih</option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
          </select>

        <label >Tanggal Lahir <sup>*</sup></label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">

        <label >Alamat</label>
          <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat"></textarea>

        <label >No Telephone</label>
            <input type="text"  pattern="[0-9]+" id="no_telp" name="no_telp" class="form-control" placeholder="No Telephone"><br>

              <button type="submit" name="reg_user">Register</button>
            </form>
        </div>
    </body>
</html>