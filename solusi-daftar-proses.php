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
// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $solusi = $_POST['solusi'];
    $penyakit = $_POST['penyakit'];
    $sql = "INSERT INTO tb_solusi (id,kode,penyakit,solusi) VALUE ('$id','$kode','$penyakit','$solusi')";
    $query = mysqli_query($kon, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman dashboard.php dengan status=sukses
        header('Location: dashboard.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: dashboard.php');
    }
} else {
    die("Akses dilarang...");
}
