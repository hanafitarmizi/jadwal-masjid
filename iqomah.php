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

  
  <link rel="stylesheet" href="dist/css/flipclock.css">
  <link rel="stylesheet" href="dist/css/style.css">

  <title></title>
  <style type="text/css">

   html, body {

    height:100%;



  }
 


</style>
</head>
<body style="background-image: url('img/iqomah.jpg'); background-size: cover;">
 
  <div class="container h-100 ">
    <div class="row h-100 justify-content-center align-items-center">


     <div class="col-md-4 mx-auto align-items-center text-center " style="background-color:rgba(255,250,60,0.3)">
      <h2 style="margin-bottom: 30px;font-weight: 600">  Waktu Iqomah</h2>
       <div class="d-flex justify-content-center"  id="iqomah"></div>
      

     </div>
    
  </div>  
</div>  

<audio class="alarm" preload="none">
 <source src="alarm.mp3" type="audio/mp3">
   Your browser does not support the audio element.
 </audio>
 <script src="dist/js/jquery.js"></script>
 <script src="dist/js/moment.js"></script>
 <script src="dist/js/flipclock.js"></script>
 <script src="dist/js/prayTimes.js"></script>



 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <script type="text/javascript">
 


 


  

  
    
    
    //hitung muncdur waktu iqomah
    var audio = new Audio('alarm.mp3');


    var iqomah = $('#iqomah').FlipClock(<?php echo $result['iqomah']*60 ?>, {
      clockFace: 'MinuteCounter',
      countdown: true,
      autoStart: false,
      callbacks:{
        interval:function(){
          console.log(iqomah);
          
          if (iqomah.getTime().time == 5) {
            // $(".alarm").trigger('load');
            // $(".alarm").trigger('play');
             
            audio.play();

          }
          if (iqomah.getTime().time == 3) {
            // $(".alarm").trigger('load');
            // $(".alarm").trigger('play');
             
            audio.play();

          }
          if (iqomah.getTime().time == 1) {
            // $(".alarm").trigger('load');
            // $(".alarm").trigger('play');
             
            audio.play();

          }
          if (iqomah.getTime().time == 0) {
            window.location.href='jadwal2.php';
           
          }

          

        }

      }
    });
    

    iqomah.start();


  
</script>
</body>
</html>