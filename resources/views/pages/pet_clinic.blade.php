<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/pet_clinic.css" rel="stylesheet" type="text/css">
  <title>ڤێتەرنەکان</title>
  @include('header')

</head>
<body class="bodyCard">
 
 @if(count($data) > 0)

@foreach($data as $row) 
	<section class="bussinesscard">
	 <div class="flip">
			<div class="front">				
				<div class="top">				
					<div class="logo"><span class="fat">S</span><span class="skinny">M</span></div>				
				</div>
				<div class="nametroduction">
					<div class="name">{{ $row->name }}</div>
					<div class="introduction">{{ $row->veterinarian}}</div>
				</div>	
				<div class="contact">						
					<div class="website">
						<span class="ion-location"></span>
						<a class="aBusinessCard" href="{{ $row->location }}">{{ $row->address }}</a>
					</div>												
					<div class="phone ">
						<span class="ion-ios7-telephone"></span> 
						<a class="aBusinessCard" href="#">{{ $row->phone_number }}</a> 
					</div>
					<div class="email ">
						<span class="ion-paper-airplane"></span>
						<a class="aBusinessCard" href="#">{{ $row->email }}</a>
					</div>
				</div>						
			</div>
			<div class="back"></div> 
		</div>
			</section>

			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	 @endforeach		

@else
<p class="noClinic">هیچ کلینەک نییە</p>
@endif
<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
@include('footer')

</html>