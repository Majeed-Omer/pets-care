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
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .buy-button {
  display: none;
}

  </style>
</head>
<body>
<div class="product">
  <h2>Product Name</h2>
  <p>Description of the product.</p>
  <button class="buy-button">Buy Now</button>
</div>
<script>
  // Get all product elements
const products = document.querySelectorAll('.product');

// Loop through each product element
products.forEach(product => {
  // Get the button element
  const button = product.querySelector('.buy-button');

  // Add a click event listener to the product element
  product.addEventListener('click', () => {
    // Toggle the display of the button element
    button.style.display = button.style.display === 'none' ? 'block' : 'none';
  });
});

</script>
</body>
</html> -->