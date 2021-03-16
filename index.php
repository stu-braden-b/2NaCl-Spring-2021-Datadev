
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coleman's Computers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aldrich" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body style="background-color: #333;">
<div class="jumbotron text-center" style="margin-bottom:0; background-color: #545454; color: black;">
  <img src="assets/logo.png" style="height:25%; width:25%" class="img-responsive center-block" alt="Logo">
  <h2>No, we're not the outdoors company!</h2>
</div>

<!--Navbar Start-->
<nav class="navbar navbar-inverse" style="margin-top:-40px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Coleman's</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
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
<div class="container-fluid center-block">
  <h1>Featured Items<h2>
</div>
<div id="FeaturedCarousel" class="carousel slide" data-ride="carousel">
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
      <img style="width:50%; height:50%;" class="center-block" src="assets/5600x.jpg" alt="Ryzen 7 5600X">
    </div>

    <div class="item">
      <img style="width:25%; height:25%;" class="center-block" src="assets/3060.png" alt="ASUS RTX 3060">
    </div>

    <div class="item">
      <img style="width:25%; height:25%;" class="center-block" src="assets/GSKILL.png" alt="G.SKILL RAM">
    </div>

    <div class="item">
      <img style="width:25%; height:25%;" class="center-block" src="assets/Supernova.png" alt="EVGA Supernova">
    </div>

    <div class="item">
      <img style="width:25%; height:25%;" class="center-block" src="assets/970-EVO.png" alt="Samsung SSD">
    </div>
  </div>

  <!--Controls-->
  <a class="left carousel-control" href="#FeaturedCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#FeaturedCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</body>
</html>
