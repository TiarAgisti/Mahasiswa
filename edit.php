<!DOCTYPE html>
<html>
<head>
  <title>Edit Data</title>
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="header.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
  <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Beranda</a>
          </div>
          <ul class="nav navbar-nav">
              <li class="active"><a href="add.php">Tambah Data</a></li>
          </ul>
        </div>
    </nav>
    <h1>Edit Data</h1>

    <?php
      include "connect.php";

      $nim = $_GET['id'];

      $query = mysqli_query($connectionString, "SELECT * FROM pendaftaran WHERE nim = '$nim'");

      $res = mysqli_fetch_array($query);
    ?>

    <form action="" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align:right;">Nim :</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" name="nim" placeholder="masukan nim" value="<?php echo $res['nim'] ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align:right;">Nim :</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" name="nama" placeholder="masukan nama" value="<?php echo $res['nama'] ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align:right;">Email :</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" name="email" placeholder="masukan email" value="<?php echo $res['email'] ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align:right;">Phone :</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" name="phone" placeholder="masukan phone" value="<?php echo $res['phone'] ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align:right;">Jurusan :</label>
        <div class="col-sm-11">
          <select class="form-control" name="jurusan">
            <option value="Sistem Informasi" <?php if($res['jurusan'] == 'Sistem Informasi') { echo "selected"; }?>>
              Sistem Informasi
            </option>
            <option value="Manajemen" <?php if($res['jurusan'] == 'Manajemen') {echo "selected";} ?>>
              Manajemen
            </option>
            <option value="Akuntansi" <?php if($res['jurusan'] == 'Akuntansi') {echo "selected";} ?>>
              Akuntansi
            </option>
            <option value="Komputer Akuntansi" <?php if($res['jurusan'] == 'Komputer Akuntansi') {echo "selected";} ?>>
              Komputer Akuntansi
            </option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1"></label>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-1 col-sm-11">
          <input type="submit" name="edit" value="Edit" class="btn btn-primary">
          <button type="reset" value="Batal" class="btn btn-danger">Batal</button>
        </div>
      </div>
    </form>
  </body>
 </html>
<?php
  if(isset($_POST['edit']))
  {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $jurusan = $_POST['jurusan'];
  

    $queryupdate = mysqli_query($connectionString, "UPDATE pendaftaran SET nama = '$nama',email = '$email',phone = '$phone',
                    jurusan = '$jurusan' WHERE nim = $nim");

    if($queryupdate)
    {
      header('location: index.php');
    }
    else
    {
      echo "Upss Something wrong..";
    }
  }

?>
