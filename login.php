<!doctype html>
<html lang="en">

<?php
error_reporting(0);
session_start();


if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit;
}; ?>

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <<link rel="stylesheet" href="Style.css">

</head>

<body>
    <?php
    include("navbar.php")
    ?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">SELAMAT DATANG</h2>
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
                                    <h3 class="text-center">AKUN</h3>
                                </div>
                            </div>
                            <form action="login-proses.php" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nama</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Kata Sandi</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="login" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                                </div>

                            </form>
                            <div class="login-footer text-center template">
                                <h5><a href="index.php" class="bold"> Kembali Ke Home </a></h5>
                            </div>
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