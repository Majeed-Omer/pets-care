<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/home/caring.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/home/addImages.css">

@include('header')
</head>
<body>

@include('pages.home.slideShow')
<br>
<h3 style="text-align: center; font-size:30px">بەرهەمەکان</h3>

<br>

<div style="text-align: center">

    <a href="#Foods"><img src="myImages/happy cat.webp" alt="happy cat" width="300px"height="300px"></a>
    <a href="#Foods"><img src="myImages/royal.jpg" alt="royal"width="300px"height="300px"></a>
    <a href="#Foods"><img src="myImages/bird.jpg" alt="bird"width="300px"height="300px"></a>
    <a href="#Foods"><img src="myImages/rabbit.jpg" alt="rabbit"width="300px"height="300px"></a>

  </div>
<br><br><br>
@include('pages.home.bigImage')
<br>
@include('pages.home.caring')

  <br><br><br><br>

@yield('content')
<br><br><br><br><br>
<script src="js/addImage.js"></script>

</body>
<br><br><br><br><br><br><br><br><br><br>
@include('footer') 

</html>
