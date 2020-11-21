<?php 
require "koneksi.php";
$sql="select * from masjid where (id=?)";
$stmt=$conn->prepare($sql);
$stmt->execute([1]);
$result=$stmt->fetch();

$sql1="select * from running_text";
$stmt1=$conn->prepare($sql1);
$stmt1->execute();
$result1=$stmt1->fetchAll();

$sql2="select * from slider";
$stmt2=$conn->prepare($sql2);
$stmt2->execute();
$result2=$stmt2->fetchAll();



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;652&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/flipclock.css">
  <link rel="stylesheet" href="dist/css/style.css">

  <title></title>



</style>
</head>
<body style="background-image: url('img/bg.jpg')">

 <div class="container">
  <div class="text-center"> 
  <h2 class="text-white text-center">Selamat Datang Pada Aplikasi Penjadwalan Masjid</h2>
  <a href="jadwal.php" class="btn btn-info btn-lg "> Tampilkan Jadwal </a>
</div>
  <div class="row mt-5">
    <div class="col-6">
      <div class="card mb-2">
        <div class="card-header d-flex justify-content-between">
          <h5>Profil Masjid</h5>
          <button  class="btn btn-primary" data-toggle="modal" data-target="#perbarui-masjid">Perbarui Profil Masjid</a>

        </div>
        <div class="card-body"> 
          <table class="table table-striped ">
            <tbody> 
              <tr>
                <td>Nama</td>
                <td><?php echo $result['nama'] ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><?php echo $result['alamat'] ?></td>
              </tr>
              <tr>
                <td>No Hp</td>
                <td><?php echo $result['hp'] ?></td>
              </tr>
              <tr>
                <td>Latitude</td>
                <td><?php echo $result['ln'] ?></td>
              </tr>
              <tr>
                <td>Longitude</td>
                <td><?php echo $result['lo'] ?></td>
              </tr>
              <tr>
                <td>Iqomah</td>
                <td><?php echo $result['iqomah'] ?> Menit</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
       <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h5>Petugas Jum'at</h5>
          <button  class="btn btn-primary" data-toggle="modal" data-target="#perbarui-petugas">Perbarui Petugas</button>

        </div>
        <div class="card-body"> 
          <table class="table table-striped ">
            <tbody> 
              <tr>
                <td>Khotib</td>
                <td><?php echo $result['khotib'] ?></td>
              </tr>
              <tr>
                <td>Imam</td>
                <td><?php echo $result['imam'] ?></td>
              </tr>
              <tr>
                <td>Mu'adzin</td>
                <td><?php echo $result['muadzin'] ?></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>    
    </div>
    <div class="col-6">
      <div class="card mb-2">
        <div class="card-header d-flex justify-content-between">
          <h5>Running Text</h5>
          <a href="create-running.php" class="btn btn-primary"> Tambah Running Text</a>

        </div>
        <div class="card-body"> 
          <table class="table table-striped ">
            <thead> 
              <tr>
                <td>Judul</td>
                <td width="60%">Isi</td>
                <td>Aksi</td>
              </tr>

            </thead>
            <tbody> 
              <?php foreach ($result1 as $row) : ?>
                <tr>

                  <td><?php echo $row['judul']; ?></td>
                  <td><?= $row['isi'] ?></td>
                  <td><a class="btn btn-sm btn-warning" href="edit-running.php?id=<?= $row['id'] ?>">ubah</a>
                    <a class="btn btn-sm btn-danger" href="delete-running.php?id=<?= $row['id'] ?>">hapus</a></td>
                  </tr>
                <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>
        </div> 
          <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h5>Running Text</h5>
          <button data-toggle="modal" data-target="#tambah-slider" class="btn btn-primary"> Tambah Slider</a>

        </div>
        <div class="card-body"> 
          <table class="table table-striped ">
           
            <tbody> 
              <?php foreach ($result2 as $row) : ?>
                <tr>

                  <td><img src="<?php echo $row['gambar']?>" style="height:150px;"></td>
                 
                  <td>
                    <a class="btn btn-sm btn-danger" href="delete-slider.php?id=<?= $row['id'] ?>">hapus</a></td>
                  </tr>
                <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>
        </div>   
     
    </div>        
  </div>  
  <div class="modal fade" id="perbarui-petugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Perbarui Petugas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="update-petugas.php" method="post">
            <div class="form-group">

              <label>Khotib</label>
              <input type="text" class="form-control" value="<?php echo $result['khotib'] ?>"  placeholder="khotib" name="khotib">
            </div>
            <div class="form-group">

              <label>Imam</label>
              <input type="text" class="form-control" value="<?php echo $result['imam'] ?>"  placeholder="imam" name="imam">
            </div>
            <div class="form-group">

              <label>Muadzin</label>
              <input type="text" class="form-control" value="<?php echo $result['muadzin'] ?>"  placeholder="muadzin" name="muadzin">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>

          </form>
        </div>
      </div>
    </div>
  </div>
   <div class="modal fade" id="tambah-slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="insert-slider.php" method="post" enctype="multipart/form-data">
            <div class="form-group">

              <label>Upload Gambar</label>
              <input type="file" class="form-control" placeholder="khotib" name="slider">
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="perbarui-masjid" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Perbarui Petugas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="update.php" method="post">
  <div class="form-group row">
    <div class="col">
      <label>Nama Masjid</label>
      <input type="text" class="form-control" value="<?php echo $result['nama'] ?>" placeholder="Nama" name="nama">
    </div>
    <div class="col">
      <label>Alamat</label>
      <input type="text" class="form-control" placeholder="Alamat" value="<?php echo $result['alamat'] ?>" name="alamat">
    </div>
  </div>
   <div class="form-group row">
    <div class="col">
      <label>No Hp</label>

      <input type="text" class="form-control" placeholder="nohp" value="<?php echo $result['hp'] ?>">
    </div>
    <div class="col">
      <label>Iqomah</label>
      <input type="number" class="form-control" name="iqomah" value="<?php echo $result['iqomah'] ?>" placeholder="Dalam Menit">
    </div>
  </div>
   <div class="form-group row">
      
    <div class="col">
      <label>Longtitude</label>

      <input type="text" class="form-control" placeholder="lo" name="lo" value="<?php echo $result['lo'] ?>">
    </div>
    <div class="col">
      <label>Langtitude</label>
      <input type="text" class="form-control" placeholder="ln" name="ln" value="<?php echo $result['ln'] ?>">
    </div>
  </div>
  


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

          </form>
        </div>
      </div>
    </div>
  </div>




  <div class="row mt-5">
    <div class="col-12">
      
      </div>     
    </div>  



  </div>
</div>  







<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="dist/js/jquery.js"></script>
<script src="dist/js/moment.js"></script>
<script src="dist/js/flipclock.js"></script>
<script src="dist/js/prayTimes.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>