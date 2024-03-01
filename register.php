<?php
include "koneksi.php";

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $namalengkap = $_POST['namalengkap'];
  $alamat = $_POST['alamat'];

  // echo $username."".$password."".$email."".$namalengkap."".$alamat;
  $sql=mysqli_query($conn,"insert into user values('','$username','$password','$email','$namalengkap','$alamat')");
  echo " <script>
  alert('register berhasil');
  location.href='login.php';
</script> ";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  include "layout/header.html";
  ?>

  <?php
  include "layout/footer.html";
  ?>

  <div class="row d-flex justify-content-center">
    <div class=" col-sm-4 mt-2 ">
      <h1 class="text-center" style="color: black;"> Halaman Register</h1>
      <form action="register.php" method="POST">
        <div class="mb-2 mt-2">
          <label for="username" class="form-label">username:</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="mb-2 mt-2">
          <label for="password" class="form-label">password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="mb-2 mt-2">
          <label for="email" class="form-label">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-2">
          <label for="namalengkap" class="form-label">nama lengkap:</label>
          <input type="text" class="form-control" id="namalengkap" placeholder="Enter namalengkap" name="namalengkap">
        </div>
        <div class="mb-2">
        <label for="alamat">alamat:</label>
<textarea class="form-control" rows="3" id="comment" placeholder="masukan alamat" name="alamat"></textarea> 
        </div>
        <div class="mb-2">
          <p>sudah punya akun? <a href="login.php">klik disini</a></p>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary" name="register">register</button>
        </div>
      </form>
    </div>
  </div>


  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>