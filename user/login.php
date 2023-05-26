<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
   
    <body>
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