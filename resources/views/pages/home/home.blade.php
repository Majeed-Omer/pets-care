<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ماڵەوە</title>
<!--  -->
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/home/advices.css" />
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/home/products-section.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bodyHome">
  
@include('header')
@include('pages.home.slideShow')
@include('pages.home.products-section')
@include('pages.home.bigImage')
@include('pages.home.advices')    
<br><br><br>
@yield('content')
<br><br>
@include('footer') 
<script src="js/addImages.js"></script>

</body>
</html>