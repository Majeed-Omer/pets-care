<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/home/caring.css" rel="stylesheet" type="text/css">
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 20%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
/* body {
	font-family: 'Montserrat', sans-serif;
	background: #e7e7e7;
	height: 100vh;
} */
.box {
	text-align: center;
}
.button {
	font-size: 1em;
	padding: 15px 35px;
	color: #fff;
	text-decoration: none;
	cursor: pointer;
	transition: all 0.3s ease-out;
	background: #0171d3;
	border-radius: 50px;
}
.button:hover {
	background-color: black;
}
.overlay {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background: rgba(0, 0, 0, 0.8);
	transition: opacity 500ms;
	visibility: hidden;
	opacity: 0;
}
.overlay:target {
	visibility: visible;
	opacity: 1;
}
.wrapper {
	margin: 70px auto;
	padding: 20px;
	background: #e7e7e7;
	border-radius: 5px;
	width: 30%;
	position: relative;
	transition: all 5s ease-in-out;
}
.wrapper{
	margin-top: 0;
	color: #333;
}
.wrapper .close {
	position: absolute;
	top: 20px;
	right: 30px;
	transition: all 200ms;
	font-size: 30px;
	font-weight: bold;
	text-decoration: none;
	color: #333;
}
.wrapper .close:hover {
	color: #06D85F;
}
.wrapper .content {
	max-height: 30%;
	overflow: auto;
}

form label {
	text-transform: uppercase;
	font-weight: 500;
	letter-spacing: 3px;
}
input[type=text], select, textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
}
input[type="submit"] {
	background-color: #413b3b;
	color: #fff;
	padding: 15px 50px;
	border: none;
	border-radius: 50px;
	cursor: pointer;
	font-size: 15px;
	text-transform: uppercase;
	letter-spacing: 3px;
}
</style>
@include('header')
</head>
<body>

 @include('slideShow')
<br>
<h3 style="text-align: center; font-size:30px">بەرهەمەکان</h3>

<br>

<div style="text-align: center">

    <a href="#Foods"><img src="images/happy cat.webp" alt="happy cat" width="300px"height="300px"></a>
    <a href="#Foods"><img src="images/royal.jpg" alt="royal"width="300px"height="300px"></a>
    <a href="#Foods"><img src="images/bird.jpg" alt="bird"width="300px"height="300px"></a>
    <a href="#Foods"><img src="images/rabbit.jpg" alt="rabbit"width="300px"height="300px"></a>

  </div>
<br><br><br>
@include('bigImage')
<br>
@include('caring')

  <br><br><br><br>

	<!-- <div class="box">
		<a class="button" href="#divOne">ئاژەڵەکەت زیادبکە</a>
	</div>
	<div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>تکایە فۆڕمەکە پڕبکەکەوە</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<form>
						<label>ناو</label>
						<input placeholder="ناوەکەی.." type="text">
						<label>جۆر</label>
						<input placeholder="جۆر.." type="text">
						<label>بەرواری لەدایکبوونی</label>
						<input placeholder="لەدایکبووی.." type="date">
						<label>زانیاری زیادە</label> 
						<textarea iplaceholder="شتەک بنووسە.."></textarea>
						<input type="submit" value="ناردن">
					</form>
				</div>
			</div>
		</div>
	</div> -->
<br>
<!-- <div class="row">
  <div class="column">
    <img src="images/cat.jpg" alt="Snow" style="width:100%">
    <img src="images/cat.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/cat.jpg" alt="Forest" style="width:100%">
    <img src="images/cat.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/cat.jpg" alt="Mountains" style="width:100%">
    <img src="images/cat.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/cat.jpg" alt="Forest" style="width:100%">
    <img src="images/cat.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/cat.jpg" alt="Mountains" style="width:100%">
    <img src="images/cat.jpg" alt="Snow" style="width:100%">
  </div>
</div> -->
@yield('content')
<br><br><br><br><br>
</body>

@include('footer') 

</html> 