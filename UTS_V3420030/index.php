<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login &amp; Sign Up </title>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container">
    <div class="message signup">
      <div class="btn-wrapper">
        <button class="button" id="signup">Sign Up</button>
        <button class="button" id="login"> Login</button>
      </div>
    </div>

    <?php require "config.php"; ?>
    <div class="form form--signup">
      <div class="form--heading">Welcome! Sign Up</div>
      <form action="" method="post">
        <input name="name" type="text" placeholder="Name">
        <input name="username" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">
        <button name="daftar" type="submit" class="button">Sign Up</button>
      </form>
    </div>
    <?php if (isset($_POST['daftar'])) {
      $name = $_POST['name'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $result = mysqli_query($conn, "SELECT username FROM uts WHERE username = '$username'");

      if (mysqli_fetch_assoc($result)) {
        echo "
              <script>    
              alert('Username Sudah Terdaftar');
              </script>
              ";

        return false;
      } else {
        $password = md5($password);
        $daftar = mysqli_query($conn, "INSERT INTO uts VALUES ('','$name','$username','$password')");
        if ($daftar = true){
          echo "<script>alert('berhasil registrasi');
        document.location='index.php';</script>";
        }
      }

      // $koneksi->query("INSERT INTO uts VALUES('', '$name', '$username', '$password')");
      // echo "<script>alert('daftar berhasil');
      //       document.location='index.php';</script>";
    }
    ?>

    <div class="form form--login">
      <div class="form--heading">Welcome back! </div>
      <form action="" method="POST">
        <input name="username" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">
        <button name="login" type="submit" class="button">Login</button>
      </form>
    </div>
  </div>
  <?php
  session_start();
  include "config.php";
  ?>
  <?php if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $result = mysqli_query($conn, "SELECT * FROM uts WHERE username = '$username' and password = '$password'");
    $cek = mysqli_num_rows($result);
    if ($cek > 0) {
      $_SESSION['username'] = $username;
      $_SESSION['status'] = "login";
      echo "<script>alert('berhasil login');
        document.location='dashboard.php';</script>";
    } else {

      // alihkan ke halaman login kembali
      echo "<script>alert('gagal login');
        document.location='index.php';</script>";
    }
  }
  ?>

  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="./script.js"></script>

</body>

</html>