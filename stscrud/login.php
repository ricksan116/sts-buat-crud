<?php
 
 session_start();

 include 'config/app.php';

 if (isset($_POST['login'])) {
  $username =mysqli_real_escape_string($db, $_POST['user']);
  $password =mysqli_real_escape_string($db, $_POST['pass']);
  $result =mysqli_query($db, "SELECT * FROM akun WHERE username ='$username'");

  if (mysqli_num_rows($result) == 1) {
    $hasil = mysqli_fetch_assoc($result);
    if (password_verify($password, $hasil['password'])) {
      $_SESSION['login'] = true;
      $_SESSION['id_akun'] = $hasil['id_akun'];
      $_SESSION['nama'] = $hasil['nama'];
      $_SESSION['username'] = $hasil['username'];
      $_SESSION['level'] = $hasil['level'];

      header("location: index.php");
      exit;

    }
  }
 }
 $error = true;

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="img/r.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 50vh; /* Mengatur tinggi halaman menjadi 100% viewport height */
    }

    .form-signin {
      max-width: 370px; /* Menetapkan lebar maksimum formulir */
      width: 150%; /* Mengisi lebar formulir sesuai dengan parent container */
      padding: 15px;
      height: 150px; /* Mengatur tinggi formulir */
      box-sizing: border-box; /* Mencegah padding dan border menambah ukuran elemen */
    }
    input[type="submit"] {
      background-color: #3498db; /* Warna biru */
      color: #fff; /* Warna teks putih */
      padding: 10px 20px;
      font-size: 1em;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #2980b9; /* Warna biru saat hover */
    }

    /* Tambahkan gaya yang lain sesuai kebutuhan Anda */

  </style>

    <title>Admin Login</title>
  </head>

  <body class="text-center">

    <form action="index.php" method="post" class="form-signin">
    <img class="mb-4" src="img/r.jpg" alt="" width="72" height="72"><br>
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1><br>
    <label class="sr-only">Email address</label>
    <input type="text" name="user" class="form-control" placeholder="Username"><br>
    <label class="sr-only">Password</label>
    <input type="password" name="pass" class="form-control" placeholder="Password">
    <div class="checkbox mb-3">
    </div>
    <input type="submit" name="login" value="Login"><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

