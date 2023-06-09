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
<br><br>
@include('pages.pet_clinic.add_pet_clinic')
<br>

 @if(count($data) > 0)

@foreach($data as $row) 
	<section class="bussinesscard">
	 <div class="flip">
			<div class="front">				
				<div class="top">				
					<div class="logo"><span class="fat">S</span><span class="skinny">M</span></div>				
				</div>
				<div class="nametroduction">
                            <h4 class="name">کلینیکی <span>{{ $row->name }}</span></h4>
					<div class="introduction">{{ $row->veterinarian}}</div>
				</div>	
				<div class="contact_clinic">						
					<div class="website">
						<span class="ion-location"></span>
						<a class="aBusinessCard" href="{{ $row->location }}">{{ $row->address }}</a>
					</div>												
					<div>
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
		
		<img src="/myImages/b_dog_clinic-rs.png" alt="dog" width=20% heigth=30% class="imgDogCartDoctor">
        <img src="/myImages/b_cat_clinic-rs.png" alt="cat" width=30% heigth=30% class="imgCatDoctor">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
			<div style="text-align: center;">
  @auth
  @if(auth()->user()->id == 1)
		<form class="formMissing" action="{{ route('pet_clinic.destroy',$row->id) }}" method="POST">
	@csrf
	@method('DELETE')
	<a class="buttonEDS edit-btn aButtonsAnimals" href="#divEdit/{{$row->id}}" id="EditPet_clinicButton/{{$row->id}}">گۆڕین</a>
  <button type="submit" class="del buttonEDS" style="--color:#f3738a">سڕینەوە</button>
    
	</form> 
	@endif
@endauth
@include('pages.pet_clinic.edit_pet_clinic')
	</div>	
	<br><br><br><br><br><br>
	 @endforeach		

@else
<p class="noClinic">هیچ کلینەک نییە</p>
@endif
<br><br><br><br><br><br>
</body>

@include('footer')
</html>