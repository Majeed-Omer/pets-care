<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/home/products-section.css">
</head>
<body>
  
@include('header')
@include('pages.home.slideShow')
<section class="animal-products parent container-fluid py-5 bg">
    <span class="top spacer layer"></span>
  
    <h3 class="d-flex justify-content-center align-items-center my-3">بەرهەمەکان</h3>
  
    <div class="row text-center justify-content-center my-2 mx-0">
      <a class="col my-5" href="#Foods"><img src="myImages/happy cat.webp" alt="happy cat" width="300px"height="300px"></a>
      <a class="col my-5" href="#Foods"><img src="myImages/royal.jpg" alt="royal"width="300px"height="300px"></a>
      <a class="col my-5" href="#Foods"><img src="myImages/bird.jpg" alt="bird"width="300px"height="300px"></a>
      <a class="col my-5" href="#Foods"><img src="myImages/rabbit.jpg" alt="rabbit"width="300px"height="300px"></a>
    </div>
    <span class="bottom spacer layer2"></span>
</section>

@include('pages.home.bigImage')
<br><br><br>
@yield('content')
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@include('footer') 
<script src="js/addImage.js"></script>	
</body>
</html>