<?php


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

include("koneksi.php");
if (isset($_GET['id'])) {

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query
    $qry = "DELETE FROM tb_admin WHERE iduser=$id";
    $data = mysqli_query($kon, $qry);

    // apakah query berhasil?
    if ($data) {
        header('Location: admin-edit.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
