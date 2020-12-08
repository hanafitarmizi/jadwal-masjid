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
  /*.section-header{
    height: 15%;
  }
  */

  .section-body {
    height:75%;


  }
  .section-jadwal {
   height:18%;
   


 }
 .section-running{
   height:7%;
   margin-bottom: 0;
   position: fixed;

 }

 .maghrib{

   background-color: #40bf40


 }
 .shubuh{
  background-color:#79d279

}
.isya{

 background-color: #39ac39

}
.dzuhur{
 background-color: #66cc66
}
.imsak{
 background-color: #8cd98c

}
.ashar{
 background-color: #53c653
 

}


.center {
  height: 100%
}
.left{
  height: 100%
}
.right {
  height: 100%
}


</style>
</head>
<body>
 <!--  <section class="section-header " style="background-color:#39ac39;"
  >
  <div class="container-fluid" style="">
    <div class="row"> 

     <div class="col-sm-8 shadow-lg text-center mx-auto">

      
      

      </div>
  </div>  
</div>   -->
</section>
  <section class="section-body " >
  
  <div class="container-fluid h-100" style="">
    <div class="row h-100"> 
      <div class="col-md-4 h-100 text-center d-flex align-items-center" style="background-color: #39ac39;">

        <div class="col-12 rounded" style="background-color:rgba(255,255,255,0.3); padding-left: 0;padding-right: 0">
          <div style="width: 100%;background-color:#b3ffb3"> 
            <p id="hari" style="font-size:32px; color:#006600; font-weight: 700;" > </p>
          </div>
        
        <p class="center tanggal " style="font-size:24px;margin-bottom: 0.2em;"></p>
       <p class="center hijriah " style="font-size:24px;"></p>  
       </div>
      
       

      </div>

     <div class="col-md-4 text-center  align-middle" style="background-color: #39ac39;padding-bottom: 0">

      <h1 style="font-size: 56px" class="text-center text-white" ><?php echo $result['nama'] ?></h1>
       <p class="text-center" style="font-style: italic; font-size:12px;font-weight: 600"><?php echo $result['alamat'] ?></p>
      <img src="img/masjidkecil.png" class="img-fluid" style="height: auto;width: 100%">
      
       
        
       
    
       
     </div>
    
     <div class="col-md-4 d-flex justify-content-center align-items-center" style="background-color: #39ac39; ">
      <div class="col-12 rounded" style="background-color:rgba(255,255,255,0.3);">
       <div class="d-flex justify-content-end" style="padding-right: 0px"  id="clock"></div>
     </div>
     <!--  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php $no=1 ?>
          <?php foreach ($result2 as $row) : ?>
          <div class="carousel-item <?php if($no==1) {
            echo "active";
          } ?>">
            <img class="img-fluid" style="height:300px" src="<?php echo $row['gambar'] ?>" alt="First slide">
          </div>
          <?php $no++ ?>
        <?php endforeach;?>
          
        </div>
      </div> -->

     	   
</div> 
</div> 
</section>
<!-- <section class="section-body">
 <div class="container-fluid">
  <div class="row" style="padding-top: 20px"> 
    <div class="col-md-5 d-flex justify-content-center" style="max-height: 300px; display: block; background-color:rgba(255,255,255,0.3)" >

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php $no=1 ?>
          <?php foreach ($result2 as $row) : ?>
          <div class="carousel-item <?php if($no==1) {
            echo "active";
          } ?>">
            <img class="img-fluid" style="height:300px" src="<?php echo $row['gambar'] ?>" alt="First slide">
          </div>
          <?php $no++ ?>
        <?php endforeach;?>
          
        </div>
      </div>



    </div>
    <div class="col-md-3">
      <div class="text-center" style="background-color:rgba(255,255,255,0.3)">  
       <p class="center tanggal " style="font-size:24px;"></p>
       <p class="center hijriah " style="font-size:24px;"></p>
     </div>
     <div class="text-center" style="background-color:rgba(255,255,255,0.3)">
      <h5 class="center mb-2"><b>Petugas Jum'at</b></h5>
      <p><b>Khotib</b><br><?php echo $result['khotib'] ?></p>
      <p><b>Imam</b><br><?php echo $result['imam'] ?></p>
      <p><b>Mu'adzin</b><br><?php echo $result['muadzin'] ?></p>
    </div>

   </div>
   <div class="col-md-4">



    <div class="text-center" style="background-color:rgba(255,255,255,0.3)">
      <h5 class="center mb-2"><b>IQOMAH</b></h5>
      <div class="d-flex justify-content-center" id="iqomah"></div>



    </div>
    <div class="text-center" style="background-color:rgba(255,255,255,0.3)">
      <h5 class="center" style="margin-bottom: 30px"><b>Menuju Sholat Selanjutnya</b></h5>

      <div class="d-flex justify-content-center" style="margin-left: 0px"  id="itung"></div>
    </div>
  </div>  
</div>  
</section> -->
<section class="section-jadwal" style="background-color: #08fa7a">
 <div class="container-fluid h-100">

  <div class="row h-100"> 
    <div class="col-2 border shadow-lg rounded text-center imsak">
      <p style="font-size: 22px;
  margin-bottom: 0.5em;"><b>Shubuh</b></p>
      <p id="shubuh"> </p>
    </div>
    <div class="col-2 border shadow-lg rounded text-center shubuh">
      <div style="border-color: black,solid;">
         <p style="font-size: 22px;
  margin-bottom: 0.2em;"><b>Syuruq</b></p>
     <p id="fajar"> </p>
      </div>
    
   </div>
   <div class="col-2 border shadow-lg rounded text-center dzuhur">

    <p style="font-size: 22px;
  margin-bottom: 0.2em;"><b>Dzuhur</b></p>
    <p id="dzuhur"> </p>


  </div>
  <div class="col-2 jadwal border shadow-lg rounded text-center ashar">

    <p style="font-size: 22px;
  margin-bottom: 0.2em;"><b>Ashar</b></p>
    <p id="ashar"> </p>


  </div>
  <div class="col-2 border shadow-lg rounded text-center maghrib">

    <p style="font-size: 22px;
  margin-bottom: 0.2em;"><b>Maghrib</b></p>
    <p id="maghrib"> </p>


  </div>
  <div class="col-xl-2 border shadow-lg rounded text-center isya" style="padding-bottom: 0">

   <p style="font-size: 22px;
  margin-bottom: 0.2em;"><b>Isya</b></p>
    <p id="isya" style="margin-bottom: 0" > </p>


  </div>

      


    </div>
  </div> 
  

</div>  
</div>  
</section>
<section class="section-running" style="background-color:rgba(0,0,0,0.3)">
 <div class="container-fluid">
  <div class="row "> 
    <marquee scrolldelay="200">
      <p style="font-size: 30px;">
        <b style="color:white;">
          <?php foreach ($result1 as $row) : ?>
            <?php echo $row['isi'] ?>|
          <?php endforeach; ?>
        </b>
      </p>
    </marquee>
  </div>  
</div>  
</section>
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
  var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
  var myDays = ['Minggu','Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
  var date = new Date();
  var day = date.getDate();
  var month = date.getMonth();
  month = months[month];
  var thisDay = date.getDay();
  thisDay = myDays[thisDay];
  var yy = date.getYear();
  var year = (yy < 1000) ? yy + 1900 : yy;
  $('#hari').html(thisDay);
  
  $('.tanggal').html(day + ' ' + month + ' ' + year);
  var today = moment().format('YYYY-MM-DD'); 

  var hijri  = new Intl.DateTimeFormat('ar-TN-u-ca-islamic', {day: 'numeric', month: 'long',weekday: 'long',year : 'numeric'}).format(Date.now());
  $('.hijriah').html(hijri);

  var jam = $('#clock').FlipClock({
    clockFace: 'TwentyFourHourClock',
    autoStart: true,

    callbacks:{
      interval:function(){

      }

    }
  });


  var getJadwal = function(when){
    prayTimes.setMethod('Karachi');
    
    var toDay = moment();
    
    if (when == 'tomorrow') {

      date = toDay.add('1', 'days');
    } else {
      // hari ini
      date = toDay;
    }

    var lat = <?php echo $result['ln'] ?>;
    var lon = <?php echo $result['lo'] ?>;

    return prayTimes.getTimes(date.toDate(), [lat, lon], +7);
  };



  var getUpcomingSchedule = function(){
    var result = null;

    var jedah = getJadwal(); 
    var hapus ="midnight"; 

    delete jedah[hapus];


    $.each(jedah,function(key, val) {
      momentVal = strToMoment(val);
      
      if (momentVal.diff(moment()) > 0) {
        result = strToMoment(val);
        //console.log(result);
        return false;
      }
    });

    if (result === null) {
      result = strToMoment(getJadwal('tomorrow').fajr).add(1, 'days');
    }
    return result;
  };

  
  var duration = function(end){
    var start  = moment();

    return end.diff(start, 'seconds');

  };
  var strToMoment = function(str){

    return moment(str, 'HH:mm');
  };

  $(document).ready(function() {
    // mendapatkan jadwal sekarang
    
    var jadwalSekarang = getJadwal();
    //hitung muncdur waktu iqomah
    var iqomah = $('#iqomah').FlipClock(<?php echo $result['iqomah']*60; ?>, {
      clockFace: 'MinuteCounter',
      countdown: true,
      autoStart: false,
      callbacks:{
        interval:function(){
          console.log(iqomah.getTime().time);
          if (iqomah.getTime().time == 0) {
            $(".alarm").trigger('load');
            $(".alarm").trigger('play');
          }
        }

      }
    });
    $('.mulai').click(function() {
      iqomah.start();
    });

    $('.reset').click(function() {

      iqomah.setTime(300);
      iqomah.stop();

    });


    var upcoming = getUpcomingSchedule();
    

    var theCounter = $('#itung').FlipClock(duration(upcoming), {
      clockFace: 'HourCounter',
      countdown: true,
      autoStart: false,
      callbacks: {
        interval:function(){


          if (theCounter.getTime().time == 5) {
            $(".alarm").trigger('load');
            $(".alarm").trigger('play');
          }
          if (theCounter.getTime().time == 1) {
            iqomah.setTime(<?php echo $result['iqomah']*60 ?>);
          }

          if (theCounter.getTime().time == 0) {
            iqomah.start();
          }

        },
        stop: function(){
          $(".alarm").trigger('load');
          $(".alarm").trigger('play');

          setTimeout(function() {
            upcoming = getUpcomingSchedule();
            theCounter.setTime(duration(upcoming));
            theCounter.start();
          },1000);
          
        }
      }
    });
    theCounter.start();
    
    var jadwalSekarang = getJadwal();
    $('#shubuh').html(jadwalSekarang.fajr);
    $('#fajar').html(jadwalSekarang.sunrise);
    $('#dzuhur').html(jadwalSekarang.dhuhr);
    $('#ashar').html(jadwalSekarang.asr);
    $('#maghrib').html(jadwalSekarang.maghrib);
    $('#isya').html(jadwalSekarang.isha);
  });


  
</script>
</body>
</html>
