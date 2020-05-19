<?php include "header.php" ?>
<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset = "utf=8">
<title> New Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </head>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

<!-- <style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
p {
    font-size: 20px;
    }
</style> -->

<body>
<div class= "boatbusbts">
    <h3>Academic research seminar of Thailand 2020
 <br><span style="color: cadetblue">#TUseminar2020</span></h3>
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
          <a class="nav-link" href="bts.php">BTS Skytrain</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buses.php">Buses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="boat.php">Boat</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h3 style="text-align: center">By boat</h3>
      <div class="container">
      <a target="_blank" href="img/thaPhraChan.jpeg">
      <img src="img/thaPhraChan.jpeg" alt="Siam Skytrain" class="mx-auto d-block" style="width:50%;height:auto;">
    </a></div>
    <div>
    <p>First method, take public bus transport to Siriraj hospital - Wanglang then take boat from there to Thaprachan pier.</p>
    <BR>
    <p>Second method, take the Chao Phraya express boat and stop at Prannok pier then take boat from there to Thaprachan pier.</p>
    </div>
    </div>
    </div>
    </div>
    </body>
</html>
<?php include "footer.php" ?>
