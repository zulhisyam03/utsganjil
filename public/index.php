<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Semester Ganjil</title>
    <style type="text/css">
        body{
            background: url("https://wallpapertag.com/wallpaper/full/6/c/1/501733-most-popular-pastel-colors-wallpaper-1920x1200.jpg") no-repeat center center fixed;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
        }
        button{
          width: 250px;
          height: 100px;
          background: rgba(255, 211, 211, 0.637);
          border-radius: 5px;
          font-size: 20px;
          border: 2px solid white;
        }
        button:hover{
          background: rgba(201, 43, 32, 0.555);
          cursor: pointer;
        }
        .box {
          width: 700px;
          height: 300px ;
          background: rgba(0, 0, 0, 0.151) ;
          color: white;
          /* code di bawah ini akan membuat div berada di tengah-tengah */
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
        .box-2 {
          width: 550px;
          /* code di bawah ini akan membuat div berada di tengah-tengah */
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
  <!-- ATUR TIMEZONE WAKTU-->
  <?php
  date_default_timezone_set('Asia/Jakarta');
  ?>

    <h1 style="font-family: Arial, Helvetica, sans-serif;text-align: center;">
      UJIAN TENGAH SEMESTER<br>
      STMIK ADHI GUNA PALU<br>
      DOSEN : ZUL HISYAM, M.Kom
    </h1>
    <div class="box">
      <div class="box-2">
        <center>
          <!--
          <button>
            Pemrograman SQL
          </button>
          <button>
            Web Dasar
          </button>
          -->
          <div>
            <h1>MATA KULIAH</h1>
            <hr>
            <h1 id="demo"></h1>
          </div>
        </center>
      </div>
    </div>

    <div style="text-align:center;position: fixed;left:0;bottom:0;background:rgba(245, 245, 245, 0.26);color: white;width: 100%;">
      Copyright By &copyZul Hisyam 2021
    </div>

  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Nov 09, 2021 03:26:00+08:00").getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
      
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML ="COMING SOON<br>" + days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
    
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "<button>Pemrograman SQL</button>&nbsp;&nbsp;<button>Web Dasar</button>";
      }
    }, 1000);
  </script>    

</body>
</html>