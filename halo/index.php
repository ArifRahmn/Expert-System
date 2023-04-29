<?php
require "../koneksi.php";
session_start();
if (!isset($_SESSION['username'])) {
   header('location:../index');
} else {
   $user = $_SESSION['username'];
   $pass = $_SESSION['password'];
}
?>

<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="../style.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>berhasil masuk!</title>
</head>

<body>
   <div class='halo'>
      <div class="card">
         <div class="card-header">
            Berhasil Login!
         </div>
         <div class="card-body kotak">
            <div>
               <p>Username <b><?php echo $user ?></b></p>
               <p>Password <b><?php echo $pass ?></b></p>
               <a class="text-danger" href="../logout">Logout</a>
            </div>
            <div>
               <h1 style='font-size:5em;'>😱</h1>
            </div>
         </div>
      </div>
   </div>
</body>

</html>