<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="website sistem pakar">
<meta name="author" content="mr k">
<link rel="icon" href="image/icon.png">
<?php

require "koneksi.php";
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
} else {
    $user = $_SESSION['username'];
    $pass = $_SESSION['password'];
}

?>

<title>SISTEM PAKAR</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">
<link href="Style.css" rel="stylesheet" type="text/css">



<?php
include("navbaradmin.php")
?>



<?php include "body.php" ?>
<?php
$sql = "SELECT * FROM tb_gejala";
$query = mysqli_query($kon, $sql);

$sql1 = "SELECT * FROM tb_solusi";
$query1 = mysqli_query($kon, $sql1);

$sql2 = "SELECT * FROM rules";
$query2 = mysqli_query($kon, $sql2);

$sql3 = "SELECT * FROM tb_admin";
$query3 = mysqli_query($kon, $sql3);
?>

<div>
    <table class="tblss">
        <thead class="table">
            <tr>
                <th class="tbls">Total Gejala</th>
                <th class="tbls">Total Solusi</th>
                <th class="tbls">Total Rules</th>
                <th class="tbls">Total Admin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tbls">
                    <h2><?php echo mysqli_num_rows($query) ?></h2>
                </td>
                <td class="tbls">
                    <h2><?php echo mysqli_num_rows($query1) ?></h2>
                </td>
                <td class="tbls">
                    <h2><?php echo mysqli_num_rows($query2) ?></h2>
                </td>
                <td class="tbls">
                    <h2><?php echo mysqli_num_rows($query3) ?></h2>
                </td>
        </tbody>
    </table>