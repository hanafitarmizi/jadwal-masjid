<?php 
require "koneksi.php";
$id=$_GET['id'];
$sql="select * from running_text where (id=?)";
$stmt=$conn->prepare($sql);
$stmt->execute([$id]);
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
        <h5>Tambah Running Text</h5>	
      </div>
      <div class="card-body">
        <form action="update-running.php" method="post">
          <input type="hidden"  name="id" value="<?php echo $result['id'] ?>">
          <div class="form-group">
           <label>Judul</label>
           <input type="text" class="form-control" value="<?php echo $result['judul'] ?>"  placeholder="Judul" name="judul">
         </div>
         <div class="form-group">
          <label>Isi Running Text</label>
          <textarea class="form-control"  name="isi"><?php echo $result['isi'] ?>

           </textarea>
        </div>        
        <div class="form-group row">

          <div class="col">
           <a href="index.php" class="btn btn-block btn-secondary"> Kembali</a>
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
<script src="dist/js/jquery.js"></script>
<script src="dist/js/moment.js"></script>
<script src="dist/js/flipclock.js"></script>
<script src="dist/js/prayTimes.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>