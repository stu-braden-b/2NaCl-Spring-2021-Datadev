
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
  <a href="#"><img style="float:left; width:10%; height:10%;" src="assets/logo.png"/></a>
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
    <li data-target="#FeaturedCarousel" data-slide-to="5"></li>
  </ol>

  <!--Wrapper for slides-->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="CPU.php"><img style="width:110%;" class="center-block" src="assets/CPU.png" alt="Ryzen 5000"></a>
    </div>

    <div class="item">
      <a href="GPU.php"><img style="width:110%;" class="center-block" src="assets/GPU.jpeg" alt="30 Series GPUs"></a>
    </div>

    <div class="item">
      <a href="RAM.php"><img style="width:110%;" class="center-block" src="assets/RAM.jpg" alt="G.SKILL RAM"></a>
    </div>

    <div class="item">
      <a href="MOBO.php"><img style="width:110%;" class="center-block" src="assets/MOBO.jpg" alt="Asus Motherboard"></a>
    </div>

    <div class="item">
      <a href="HDD.php"><img style="width:110%;" class="center-block" src="assets/HDD.jpg" alt="Samsung SSD"></a>
    </div>

    <div class="item">
      <a href="PWR.php"><img style="width:110%;" class="center-block" src="assets/PWR.jpg" alt="EVGA Power Supplies"></a>
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
</div>
<div style="border-left: 50%; border-right: 50%; border-top: 1.5%; border-bottom: 1.5%; border-style: none; border-color:545454"></div>
<div style="background-color: #333;">
  <h1 style="font-family: Aldrich; color:#9d9d9d">About Us</h1>
  <img src="assets/543268.jpg" alt="Coleman" width="113" height="170" style="border: 5px solid #555; float:left; margin:0px 10px">
  <p style="font-family: Aldrich; font-size: 20px; color:#9d9d9d">Henry Coleman is a resident of Lexington for 20 years, moving here after acquiring his college degree. He began his career as a computer repairman, but He wanted to do more than just repairs. He knew many people who were not just needing repairs, but needed better parts for their computers.</p>
  <p style="font-family: Aldrich; font-size: 20px; color:#9d9d9d">In 2017, he decided to open his own business for selling, assembling, and repairing computers. Coleman’s Computers began its online presence a year later, although it was merely an online storefront to display what products were in stock at the store.. Coleman’s Computers began its part pickup program in 2020 to combat the global pandemic, as well as it’s part delivery services. Recently, Coleman’s Computers has pushed back toward in-person services, but still uses the online storefront to display products to be found in store.</p>
</div>
<div style="padding-left: 50%; padding-right: 50%; padding-top: 1.5%; padding-bottom: 1.5%; border-style: none;"></div>
</body>

<footer>

<nav class="navbar-wrapper navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <p class="navbar-text pull-left">Coleman's Computers</p>
  </div>
</nav>
</footer>

</html>
