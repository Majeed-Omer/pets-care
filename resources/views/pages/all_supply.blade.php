<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پێداویستی ئاژەڵان</title>
    @include('header')
    <style>
.product-row {
  display: flex;
  margin-top: 20px;
  margin-left: 200px
}
.product-item {
  text-align: center;
  line-height: 0.5;
}
.product-item img {
  width: 100%;
  max-width: 200px;
  height: auto;
  margin-left: 20px
}
.product-item .h3Products {
  margin-top: 10px;
  font-size: 1.2rem;
  text-decoration: underline;
}

.priceP{
  color: grey
}



#main-outer {
	width: 100%;
	height: 100%;
}

/* NAVIGATION */

.navigation-wrapper {
	background-color: #02344a;
	width: 300px;
	height: 500px;
  margin-left: 230px
}
.navigation-wrapper .navigation .nav {
	zoom: 1;
	display: block;
	float: left;
	list-style: none;
	margin: 0px;
}
.navigation-wrapper .navigation .nav li {
    background-color: transparent;
    float: left;
    position: relative;
}
.navigation-wrapper .navigation .nav li .sub-menu {
	background-image: none;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	-ms-border-radius: 0px;
	-o-border-radius: 0px;
	border-radius: 0px;
	background-color: #022a3b;
	margin: 50px 0px 0px 0px;
	position: absolute;
	padding: 0px;
	top: 0px;
	visibility: hidden;
	top: 10px;
	opacity:0;
	width: 200px;
	z-index: 999;
}

.navigation-wrapper .navigation .nav li {
	float: none;
	display: block;
	min-width: 100%;
}
.nav:after, .container:after {
	display: table;
    content: " ";
    clear: both;
}
.nav:before, .container:before {
	display: table;
    content: " ";
}
.nav > li a {
	background-color: #022a3b !important;
	color: #fff !important;
	display: block;
	font-size: 14px;
	padding-left: 20px;
	padding-right: 20px;
	padding-bottom: 17px;
	padding-top: 15px;
}
.nav > li > a {
	border-top:2px solid #02344a;
	background-color: #02344a !important;
}
.nav > li ul li a {
	border: 0px !important;
}
.navigation-wrapper .navigation .nav li:hover>ul{
	-webkit-transition: opacity 0.3s ease-in, top 0.1s ease-in;
	-moz-transition: opacity 0.3s ease-in, top 0.1s ease-in;
	-o-transition: opacity 0.3s ease-in, top 0.1s ease-in;
	transition: opacity 0.3s ease-in, top 0.1s ease-in;
	visibility:visible;
	top: 0px;
	opacity: 1;
}
.navigation-wrapper .navigation .nav>li:hover>a{
	-webkit-transition: background-color 0.2s ease-in, border-top 0.2s ease-in;
	-moz-transition: background-color 0.2s ease-in, border-top 0.2s ease-in;
	-o-transition: background-color 0.2s ease-in, border-top 0.2s ease-in;
	transition: background-color 0.2s ease-in, border-top 0.2s ease-in;
	background-color:#022a3b !important;
	border-top:2px solid #06a7ea;
}
.navigation-wrapper .navigation .nav li a{	
	text-decoration:none;
}
.navigation-wrapper .navigation .nav li ul li a:hover{
	-webkit-transition: background-color 0.2s ease-in,padding-left 0.2s ease-in;
	-moz-transition: background-color 0.2s ease-in,padding-left 0.2s ease-in;
	-o-transition: background-color 0.2s ease-in,padding-left 0.2s ease-in;
	transition: background-color 0.2s ease-in,padding-left 0.2s ease-in;
	background-color:#06a7ea !important;
	padding-left:25px;
}
.navigation-wrapper .navigation .nav>.menuparent>a { 
	background-image: url("myImages/arrow-down.png");
	background-position: 85% center;
	background-repeat: no-repeat;
	background-size: 12px 8px;
	padding-right: 40px;
}
.menuparent ul .menuparent>a { 
	background-image: url("myImages/arrow-right.png");
	background-position: 85% center;
	background-repeat: no-repeat;
	background-size: 8px 12px;
	padding-right: 40px;
}

/* NAVIGATION END */
.rowStuff {
  display: flex; /* Set the display property to flex */
  float: center;
  width: 100%;
  height: 100%;
  background-color: grey
}
.rowStuff > div:nth-child(3) {
  display: block; /* Force item 3 onto a new line */
}

.columnNames {
  flex: 1; /* Set the flex property to 1 to make the columns equal width */
  padding-right: 120px;
  padding-top: 10px;
}
.column1 {
	padding-left: 300px;
}
#part2 {
  display: none;
}

    </style>
</head>
<body>

<div class="rowStuff">

<div class="columnNames" > 
<div id="part1">
@if(count($data) > 0)

@foreach($data as $row) 
  
	<div class="product-item">
    <img src="myImages/cat.jpg" alt="Product 1">
    <h3>{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_price }}</p>
	</div>  
  @endforeach		

@else
	<tr>
		<td colspan="5" class="text-center">هیچ خۆراکەک نییە</td>
	</tr>
@endif 
  </div>
  
  <div id="part2">
@if(count($data) > 0)

@foreach($data as $row) 
  
	<div class="product-item">
    <img src="myImages/cat.jpg" alt="Product 1">
    <h3>{{ $row->medicine_name }}</h3>
    <p class="priceP">{{ $row->medicine_price }}</p>
	</div>
  @endforeach		

@else
	<tr>
		<td colspan="5" class="text-center">هیچ خۆراکەک نییە</td>
	</tr>
@endif 
  </div> 
</div>

  <div class="columnNames">
  <div id="main-wrapper">
	<div id="main">
	  	<div class="navigation-wrapper">
	  	<div class="container">
	  	<div class="navigation">
	  	<div id="main-menu-container">
	  	<div id="main-menu" class="nav">
	  	<li class="menuparent">
	  	<a href="#">گروپەکان</a>
	  	<ul class="sub-menu">
		<li id="show-part1-btn"><a href="#">کەل و پەل</a></li>
	  	<li id="show-part2-btn"><a href="#">دەرمانەکان</a></li> 
	  	</ul>
	  	</li>
	  	</div>
	  	</div>
	  	</div>
	  	</div>
	  	</div> 
	  			
	  	</div>
	  	</div>

  </div>
</div>

<br><br><br><br><br><br><br>

<script>
	function showPart1() {
  var part1 = document.getElementById("part1");
  part1.style.display = "block";
  part2.style.display = "none";
}

function showPart2() {
  var part2 = document.getElementById("part2");
  part2.style.display = "block";
  part1.style.display = "none";
}
var showPart1Btn = document.getElementById("show-part1-btn");
showPart1Btn.addEventListener("click", showPart1);

var showPart2Btn = document.getElementById("show-part2-btn");
showPart2Btn.addEventListener("click", showPart2);

 </script>
</body>
@include('footer')
</html>
