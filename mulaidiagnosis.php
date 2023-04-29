<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>SISTEM PAKAR</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="Style.css" rel="stylesheet">
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <br><br>
    <div class="posisitable">
        <h5>Pertanyaan Sistem Diagnosis Penyakit Pohon Buah Kurma Menggunakan Metode Forward Chaining</h5>


        <div id=>

            <?php include('koneksi.php'); ?>
            <div class="mytable">
                <form method="POST" action="proses.php">

                    <?php
                    $qry = "select * from tb_gejala";
                    $data = mysqli_query($kon, $qry);
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" value="<?= $d['kode'] ?>" name="<?= $d['id'] ?>">
                                </div>
                            </div>
                            <input type="text" class="form-control" disabled value="<?= $d['gejala'] ?>">
                        </div>
                    <?php
                    }
                    ?>

                    <div class="posisitable">
                        <input type="submit" class="btn btn-lg btn-info " name="submit" value="Diagnosa">
                    </div>
            </div>
            </form>
        </div>

    </div>

</body>

</html>