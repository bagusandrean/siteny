<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.2/css/perfect-scrollbar.min.css" integrity="sha512-ygIxOy3hmN2fzGeNqys7ymuBgwSCet0LVfqQbWY10AszPMn2rB9JY0eoG0m1pySicu+nvORrBmhHVSt7+GI9VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.11.2/toastify.min.css" integrity="sha512-ecfz7BsZIyMBMdXTx7GU2128lQ7MTiqGJwAqCumba6v8y7YDhYEHueqy+iUtUdZsnsKhCyoCcFGGMhpwQOy6xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://linky.my.id/assets/css/bootstrap.css">
  <link rel="stylesheet" href="http://linky.my.id/assets/vendors/simple-datatables/style.css">
  <link rel="stylesheet" href="/assets/css/app.css">
  <link rel="stylesheet" href="/assets/css/style.css">

  <title>Suhu</title>
</head>
<body>
  <div class="container">
    <div class="content mt-5">
      <div class="row justify-content-center">
        <div class="col col-md-7 col-lg-5">
          <div class="card">
            <div class="card-header text-center">
              <h5 class="card-title fs-1">Login</h5>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="usernam" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button class="btn btn-primary text-center" type="submit">Login</button>
                <p class="text-sm mt-2">
                  Belum Punya Akun? <a href="/auth/register.php">Register</a>
                </p>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.11.2/toastify.min.js" integrity="sha512-zrRn+TvTc4KgDOtlKOgThphx1DGCZ8zR/xGWtG/WiKp6G+/xUBWow3p2lWu8DHfdHYWfwvIY0I89b3q22POHSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/assets/js/script.js"></script>
  <script>
    $(document).ready(() => {
      //toastify('a', 'b')
    })
  </script>

</body>

</html>
<?php
include('../helper/db.php');
session_start();

if (!empty($_SESSION['status']) == 'login') {
header('location: ../dashboard.php');
}
if (isset($_POST['username'])) {
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password = md5($password);
$datas = mysqli_query($db, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($datas);
$data = mysqli_fetch_assoc($datas);
if ($cek > 0) {
session_start();
$_SESSION['username'] = $username;
$_SESSION['status'] = "login";
echo "<script>toastify('#7FC8A9', 'Login Sukses!!')</script>";
echo "<script>setInterval(function(){window.location.href = '../dashboard.php'}, 2000)</script>";

} else {
//echo "gagal";
echo "<script>toastify('#FF6B6B', 'Login Gagal, Username atau Password Salah!')/*setInterval(function(){location.href('dashboard.php')}, 3000)*/ </script>";
}
}

?>