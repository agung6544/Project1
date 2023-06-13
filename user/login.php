<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/login.css">
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
        <div class="container">
          <h1>Login</h1>
            <form action="" method="post">
                <label style="color: black;">Username</label><br>
                <input id="username" type="text" class="form-control" name="username"><br>
                <label style="color: black;">Password</label><br>
                <input id="password" type="password" class="form-control" name="password" type="password"><br>
                <button type="submit" name="login_user" href="user.php" class="login">Log in</button>
                <p style="color: rgb(0, 0, 0);">Belum memiliki akun?  Register dulu dong!</p>
                <a href="regist.php">Register disini</a>
            </form>
        </div>     
    </body>
</html>