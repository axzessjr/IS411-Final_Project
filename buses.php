<?php include "header.php" ?>

<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset = "utf=8">
<title> New Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="busesstyless.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </head>
<style>
p {
    font-size: 20px;
    }
</style>
<body>
<script> 
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
  });
   $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
  });
    $("#flip4").click(function(){
    $("#panel4").slideToggle("slow");
  });
    $("#flip5").click(function(){
    $("#panel5").slideToggle("slow");
  });
});
</script>
<div class= "boatbusbts">
    <h3>Academic research seminar of Thailand 2020 <br><span style="color: cadetblue">#TUseminar2020</span></h3>
</div>
    
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h4>Google MAP</h4>
      <div>
      <iframe src="https://www.google.com/maps/d/embed?mid=16eXedhMZ3ZmsFICGE0-as9evLhmgcY6X" width="250" height="250"></iframe></div>
      <h3 style="color: crimson">How to get there :</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" data-toggle="pills" href="bts.php">BTS Skytrain</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pills"  href="buses.php">Buses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pills" href="boat.php">Boat</a>
        </li>
      </ul>
      <hr class="d-sm-none">
</div>

<div class="col-sm-8">
  <h3 style="text-align: center">By Buses</h3>
    <div class="container">
    <a target="_blank" href="img/busStop.jpeg.">
      <img src="img/busStop.jpeg" alt="Siam Skytrain" class="mx-auto d-block" style="width:50%">
    </a>
    </div>
      <br>
    <div class="grid-container">
    <div><img src="img/bus1.png" alt="Siam Skytrain" height="30px" width="50px"></div>
    <div id="flip1">Bus route Sanamluang</div>
    </div>
    <p id="panel1">line 19, 30, 32, 33, 53, 60, 70, 201, ปอ.32, ปอ.59, ปอ.3, ปอ.7, ปอ.80,ปอ.91, ปอ.503</p>
    <div class="grid-container">
    <div><img src="img/bus1.png" alt="Siam Skytrain" height="30px" width="50px"></div>
    <div id="flip2">Bus route Tha Phra Chan</div>
    </div>
    <p id="panel2">line 32, 53, 124, 203, 201, ปอ.32, ปอ.524</p>
    <div class="grid-container">
    <div><img src="img/bus1.png" alt="Siam Skytrain" height="30px" width="50px"></div>
    <div id="flip3">Bus route Tha Chang, Wat Phra Kaew</div>
    </div>
    <p id="panel3">line 32, 53, 124, 203, 201, ปอ.32, ปอ.524</p>
    <div class="grid-container">
    <div><img src="img/bus1.png" alt="Siam Skytrain" height="30px" width="50px"></div>
    <div id="flip4">Bus route Siriraj Hospital</div>
    </div>
    <p id="panel4">line 19, 57, 81, 149, ปอ.91</p>
    <div class="grid-container">
    <div><img src="img/bus1.png" alt="Siam Skytrain" height="30px" width="50px"></div>
    <div id="flip5">Bus route Phra Pinklao</div>
    </div>
    <p id="panel5">line 124, 125, 127, 146, 149, 203, 516, ปอ.8, ปอ.47, ปอ.79</p>
    </div>
  </div>
</div>

</body>
</html>
<?php include "footer.php" ?>
