<?php 
require "koneksi.php";
$sql="select * from masjid where (id=?)";
$stmt=$conn->prepare($sql);
$stmt->execute([1]);
$result=$stmt->fetch();

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
       
      <div class="row justify-content-center"> 
      	<div class="col-8 " style="margin-top: 100px">	
        
         <div class="card">
         	<div class="card-header">
         	<h5>Atur Data Masjid</h5>	
         	</div>
         <div class="card-body">
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
  <div class="form-group row">
    	
    <div class="col">
    	<a href="	" class="btn btn-block btn-secondary"> Kembali</a>
    </div>
    <div class="col">
    	<button type="submit" class="btn btn-success btn-block">Simpan</button>
    </div>
  </div>
</form>
</div>
         </div>	
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