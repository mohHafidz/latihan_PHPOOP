<?php
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
$result = $db->get_by_id($id);

if(isset($_POST['add'])){
  $db->update_data($_POST['nama'],$_POST['tanggal_lahir'],$_POST['tempat_lahir'],$_POST['warga_negara'],$_POST['alamat'],$_POST['email'],$_POST['tlp'],$_POST['smp'],$_POST['ayah'],$_POST['ibu'],$_POST['penghasilan'],$_POST['id']);
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

    <style>
        @media (min-width: 1025px) {
        body{
            background-color: #8fc4b7;
        }
        .h-custom {
            height: auto !important;
        }
        }
    </style>

    <title>Edit</title>
    <!-- <link rel="shortcut icon" href="img/img remove/red-black.png" type="image/x-icon"> -->

  </head>
  <body class="container">


  <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registrasi Siswa</h3>

            <form class="px-md-2" method="POST" action="">
              <input type="hidden" name="id" value="<?= $id ?>">

              <div class="form-outline mb-4">
                <input 
                type="text" 
                id="form3Example1q" 
                name="nama" 
                class="form-control"
                value="<?= $result['nama'] ?>"
                />
                <label class="form-label" for="form3Example1q">Nama</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input
                      type="date"
                      class="form-control"
                      id="exampleDatepicker1"
                      name="tanggal_lahir"
                      value="<?= $result['tanggal_lahir'] ?>"
                    />
                    <label for="exampleDatepicker1" class="form-label">tanggal lahir</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                <input 
                type="text" 
                id="form3Example1q" 
                name="tempat_lahir" 
                class="form-control"
                value="<?= $result['tempat_lahir'] ?>" 
                />
                <label class="form-label" for="form3Example1q">tempat lahir</label>

                </div>
              </div>

              <div class="mb-4">

                <input 
                type="text" 
                id="form3Example1q" 
                name="warga_negara" 
                class="form-control" 
                value="<?= $result['warga_negara'] ?>"
                />
                <label class="form-label" for="form3Example1q">Warga negara</label>

              </div>

              <div class="mb-4">

                <input 
                type="text" 
                id="form3Example1q"
                name="alamat" 
                class="form-control"
                value="<?= $result['alamat'] ?>"
                />
                <label class="form-label" for="form3Example1q">Alamat</label>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input
                      type="email"
                      class="form-control"
                      id="exampleDatepicker1"
                      name="email"
                      value="<?= $result['email'] ?>"
                    />
                    <label for="exampleDatepicker1" class="form-label">Email</label>
                  </div>

                </div>

                <div class="col-md-6 mb-4">

                    <input 
                    type="text" 
                    id="form3Example1q" 
                    name="tlp" 
                    class="form-control" 
                    value="<?= $result['tlp'] ?>"
                    />
                    <label class="form-label" for="form3Example1q">No. hp</label>

                </div>
              </div>

              <div class="mb-4">

                <input 
                type="text" 
                id="form3Example1q" 
                name="smp" 
                class="form-control" 
                value="<?= $result['smp'] ?>"
                />
                <label class="form-label" for="form3Example1q">Asal SMP</label>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input
                      type="text"
                      class="form-control"
                      id="exampleDatepicker1"
                      name="ayah"
                      value="<?= $result['ayah'] ?>"
                    />
                    <label for="exampleDatepicker1" class="form-label">Nama Ayah</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                <input 
                type="text" 
                id="form3Example1q" 
                name="ibu" 
                class="form-control"
                value="<?= $result['ibu'] ?>" 
                />
                <label class="form-label" for="form3Example1q">Nama Ibu</label>

                </div>
              </div>

              <div class="mb-4">

                <input 
                type="text" 
                id="form3Example1q" 
                name="penghasilan" 
                class="form-control" 
                value="<?= $result['penghasilan'] ?>"
                />
                <label class="form-label" for="form3Example1q">Penghasilan</label>

              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1" name="add">Submit</button>
              <a href="daftar_siswa.php" class="btn btn-warning btn-lg mb-1" >close</a>


            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <br>
    
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
