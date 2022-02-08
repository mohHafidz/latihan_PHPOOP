<?php 
include('koneksi.php');
$db = new database();
$siswa = $db->tampil_data();

if(isset($_POST['hapus'])){
	$db->hapus($_POST['id']);
	header('location:daftar_siswa.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">


  </head>
  <body class="container">
    <br>

    <form action="" method="post">
      <div class="form-group">
        <input type="text" id="search" name="search" placeholder="search" autocomplete="off">
        <button class="btn btn-primary" id="cari" name="cari">search</button>
      </div>
    </form>
    <br>

<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Office</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <?php $no=1; ?>
      <?php foreach ($siswa as $row): ?>
        <tbody>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                  <form action="" method="post">
                  <input type="hidden" id="id" name="id" value="<?= $row['id'] ?>">
                  <button id="hapus" name="hapus" class="btn btn-danger btn-sm px-3"> hapus</button>
                  <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm px-3">Edit</a>
                  </form>
                </td>
            </tr>
        </tbody>
        <?php $no++; ?>
        <?php endforeach; ?>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Office</th>
                <th>Alamat</th>
            </tr>
        </tfoot>
    </table>

  

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
      $(document).ready(function() {
      $('#example').DataTable();
      } );
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
