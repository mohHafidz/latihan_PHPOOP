<?php
include('koneksi.php');
$db = new database();
$siswa = $db->tampil_data();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .register{
            background-color: #0b5fbf;
            background-repeat: no-repeat;
            background-size: 100% 800px;
            color: white;
            border-radius: 10px;
        }
        .reg{
            background-color: #043f82;
            border-radius: 10px;
            border: 2px solid white;
            padding: 15px;
        }
    </style>

    <title>Hello, world!</title>
  </head>
  <body class="container">
      <br><br>

  <!-- <form action="" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="nama" name="nama" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Tempat lahir</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="tempat_lahir" name="tempat_lahir" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Tanggal lahir</span>
        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="tanggal_lahir" name="tanggal_lahir" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Warga negara</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="warga_negara" name="warga_negara" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="alamat" name="alamat" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
        <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="email" name="email" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">No hp</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="tlp" name="tlp" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Asal SMP</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="smp" name="smp" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nama ayah</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="ayah" name="ayah" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nama ibu</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="ibu" name="ibu" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Penghasilan kedua orang tua</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="penghasilan" name="penghasilan" require>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Upload foto</span>
        <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="foto" name="foto">
    </div>

    <button class="btn btn-outline-primary btn-lg btn-block" id="add" name="add">Add</button>
    <a href="index.php" class="btn btn-outline-danger btn-lg btn-block">Cancel</a>
  </form> -->
  <div class="container">
  <section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
  <a href="daftar_siswa.php" class="btn btn-close" style="font-size: 30px;"></a>
    <div class="row d-flex align-items-center h-80">
      <div class="col ">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">To Do App</h4>

            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Warga Negara</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Email</th>
                  <th scope="col">No.hp</th>
                  <th scope="col">Asal SMP</th>
                  <th scope="col">Nama Ayah</th>
                  <th scope="col">Nama Ibu</th>
                  <th scope="col">Penghasilan</th>
                  <!-- <th scope="col">Foto</th> -->
                </tr>
              </thead>
              <?php $no=1 ?>
              <?php foreach ($siswa as $row) : ?>
              <tbody>
                <tr>
                    <th scope="row"><?= $no ?></th>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['tempat_lahir'] ?></td>
                  <td><?= $row['tanggal_lahir'] ?></td>
                  <td><?= $row['warga_negara'] ?></td>
                  <td><?= $row['alamat'] ?></td>
                  <td><?= $row['email'] ?></td>
                  <td><?= $row['tlp'] ?></td>
                  <td><?= $row['smp'] ?></td>
                  <td><?= $row['ayah'] ?></td>
                  <td><?= $row['ibu'] ?></td>
                  <td><?= $row['penghasilan'] ?></td>
                  <!-- <td><img src="<?php echo "img/foto upload".$row['foto']; ?>" width="90"></td> -->
                </tr>
              </tbody>
              <?php $no++?>
              <?php endforeach; ?>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <br><br><br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
