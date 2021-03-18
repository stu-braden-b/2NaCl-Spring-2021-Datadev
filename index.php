
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coleman's Computers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bs/bootstrap-3.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aldrich">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bs/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body style="background-color: #333; color:#000;">

<!--Navbar Start-->
<div style="background-color:#545454; margin-left:-15px;" class="container-fluid">
  <img style="float:left; width:10%; height:10%;" src="assets/logo.png"/>
  <div style="padding-top:15px; float:right; font-family:Aldrich; color:#000;" class="content-heading"><h1>No, We're Not the Camping Company</h1></div>
</div>

<nav class="navbar navbar-inverse" style="font-family: Aldrich;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                     
      </button>
      <a style="font-size: 2em;" class="navbar-brand" href="#">Coleman's</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul style="font-size: 2em;" class="nav navbar-nav">
        <li><a href="CPU.php">CPUs</a></li>
        <li><a href="GPU.php">GPUs</a></li>
        <li><a href="RAM.php">RAM</a></li>
        <li><a href="MOBO.php">Motherboards</a></li>
        <li><a href="HDD.php">Storage</a></li>
        <li><a href="PWR.php">Power Supplies</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--Carousel Start-->
<div style="margin-top:-25px;" id="FeaturedCarousel" class="carousel slide" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#FeaturedCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#FeaturedCarousel" data-slide-to="1"></li>
    <li data-target="#FeaturedCarousel" data-slide-to="2"></li>
    <li data-target="#FeaturedCarousel" data-slide-to="3"></li>
    <li data-target="#FeaturedCarousel" data-slide-to="4"></li>
  </ol>

  <!--Wrapper for slides-->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="width:110%;" class="center-block" src="assets/CPU.png" alt="Ryzen 5000">
    </div>

    <div class="item">
      <img style="width:110%;" class="center-block" src="assets/GPU.jpeg" alt="30 Series GPUs">
    </div>

    <div class="item">
      <img style="width:110%;" class="center-block" src="assets/RAM.jpg" alt="G.SKILL RAM">
    </div>

    <div class="item">
      <img style="width:110%;" class="center-block" src="assets/PWR.jpg" alt="EVGA Power Supplies">
    </div>

    <div class="item">
      <img style="width:110%;" class="center-block" src="assets/HDD.jpg" alt="Samsung SSD">
    </div>
  </div>

  <!--Controls-->
  <a class="left carousel-control" href="#FeaturedCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#FeaturedCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid">
  <h1>

</body>
</html>
