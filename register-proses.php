<?php
require "koneksi.php";
require "cipher/encrypt.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Proses regist</title>
</head>

<body>
    <div class='halo'>
        <?php
        $user = vigenere($username, $key, true);
        $pass = vigenere($password, $key, true);
        $sql = "SELECT * FROM tb_admin WHERE username = '$user' ";
        $query = $kon->query($sql);
        if ($query->num_rows != 0) {
            echo "<div class='alert alert-warning'>Username Sudah Terdaftar! 🤨 <a href='register.php'>Kembali</a></div>";
        } else {
            if (!$user || !$pass) {
                echo "<div>Masih ada data yang kosong! <a href='register.php'>Back</a>";
            } else {
                $data = "INSERT INTO tb_admin VALUES (NULL, '$user', '$pass')";
                $simpan = $kon->query($data);
                if ($simpan) {
                    echo "<div class='alert alert-success'>Pendaftaran Sukses 🥳, Silahkan <a href='dashboard.php'>Login</a></div>
                    <div class='card'>
                        <div class='card-body kotak-regist'>
                            <div>
                                <p>Key <b>$key</b></p>
                                <p>Username <b>$user</b> ($username)</p>
                                <p>Password <b>$pass</b> ($password)</p>
                            </div>
                        </div>
                    </div>";
                } else {
                    echo "<div class='alert alert-danger'>Proses Gagal!</div>";
                }
            }
        }
        ?>
    </div>
</body>

</html>