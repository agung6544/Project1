<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$koneksi = mysqli_connect('localhost', 'root', '', 'puskesmas');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
  $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $tgl_lahir = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
  $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
  $no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);
  $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
  $email = mysqli_real_escape_string($koneksi, $_POST['email']);
  $username = mysqli_real_escape_string($koneksi, $_POST['username']);
  $password_1 = mysqli_real_escape_string($koneksi, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($koneksi, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username
  $user_check_query = "SELECT * FROM tb_user WHERE username='$username' OR email='$email'  LIMIT 1";
  $result = mysqli_query($koneksi, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO tb_user (nik, nama, alamat, tgl_lahir, jenis_kelamin, no_telp, email, username, password)
  			  VALUES('$nik', '$nama', '$alamat', '$tgl_lahir', '$jenis_kelamin', '$no_telp', '$email', '$username', '$password')";
  	mysqli_query($koneksi, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now registered";
  	// header('location: login.php');
  }
}

// ...
// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($koneksi, $_POST['username']);
  $password = mysqli_real_escape_string($koneksi, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }


  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($koneksi, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: user.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>