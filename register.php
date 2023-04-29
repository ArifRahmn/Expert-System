<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    echo '
 <script>
 alert("Password Salah :(");
  window.location.href="register.php";
  </script>
  ';
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>REGISTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <<link rel="stylesheet" href="Style.css">


</head>

<body>
    <?php
    include("navbaradmin.php")
    ?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">PENDAFTARAN AKUN ADMIN</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(image/iicon.jpeg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="text-center">DAFTAR AKUN</h3>
                                </div>

                            </div>
                            <form action="register-proses.php" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nama Pengguna</label>
                                    <input class="form-control" required="required" name="username" id="username" rows="3" placeholder="masukkan username">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">kata Sandi</label>
                                    <input class="form-control" required="required" name="password" id="password" rows="3" placeholder="masukkan password">
                                </div>
                                <div class="form-group">
                                    <button class="form-control btn btn-primary rounded submit px-3" type="submit" name="submit" value="Register">Daftar</button>
                                </div>

                            </form>
                            <p class="text-center">Sudah Punya Akun? <a href="dashboard.php">Halaman Admin</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>