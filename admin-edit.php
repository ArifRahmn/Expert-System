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
?>
<?php include("body.php"); ?>
<main role="main" class="col-md-1 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
    <h2 class='btn btn-sm btn-success '><a href="register.php" class="text-center">Buat Akun</a></h2>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm" style="text-align: center;">
      <thead>
        <tr>
          <th></th>
          <th>Username</th>
          <th>Password</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
        include("navbaradmin.php")
        ?>
        <?php
        include "koneksi.php";
        $qry = "select * from tb_admin";
        $data = mysqli_query($kon, $qry);
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <form action="admin-edit-proses.php" method="POST">
            <tr>
              <input type="hidden" name="id" value="<?= $d['iduser'] ?>"></td>
              <td><i class="fa fa-user" aria-hidden="true"></i></i></td>
              <td><input type="text" class="form-control col-sm-6 container text-center" name="username" value="<?= $d['username'] ?>"></td>
              <td><input type="text" class="form-control col-sm-9 container text-center" name="password" value=""></td>

              <td><a class='btn btn-sm btn-danger' href='hapus.php?id=<?= $d['iduser'] ?>'>Hapus</a></td>
            </tr>
          </form>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</main>