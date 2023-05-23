<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="regist.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Daftar Akun</h1>
          <form action="" method="post">
        <div>
            <label >NIK KTP <sup>*</sup></label>
            <input type="text"  pattern="[0-9]+" id="nik" name="nik" class="form-control"  placeholder="NIK KTP" >
        </div>

        <div>
           <label >Nama <sup>*</sup></label>
           <input type="text" id="nama" name="nama" class="form-control"  placeholder="Nama" >
        </div>

        <div>
          <label >Jenis Kelamin</label>
          <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
          <option>Pilih</option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
          </select>
        </div>

        <div>
            <label >Tanggal Lahir <sup>*</sup></label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
        </div>

        <div>
          <label >Alamat</label>
          <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat"></textarea>
        </div>

        <div>
            <label >No Telephone</label>
            <input type="text"  pattern="[0-9]+" id="no_telp" name="no_telp" class="form-control" placeholder="No Telephone">
        </div>

        <div>
            <label >Username <sup>*</sup></label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="">
        </div>

        <div>
            <label >Password <sup>*</sup></label>
            <input type="password" id="password_1" name="password_1" class="form-control" placeholder="Password">
        </div>

        <div>
            <label >Ulang Password <sup>*</sup></label>
            <input type="password" id="password_2" name="password_2" class="form-control"  placeholder="Password">
        </div>

        <br><br>
                <button type="submit" name="reg_user">Register</button>
            </form>
        </div>
    </body>
</html>