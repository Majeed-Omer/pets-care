<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="css/shelter.css">
<title>پەناگەی ئاژەڵان</title>
@include('header')
	
</head>
<body class="bodyShelter">
<br><br>
@include('pages.shelter.add_shelter_page')

@if(count($data) > 0)

@foreach($data as $row)
<section class="parent">
	<section class="frame px-5">
			<h1 class="h1Selter">{{ $row->name }}</h1>
	
		<div class="video-container my-5">
			<video autoplay loop muted style="object-fit: cover; ">
				<source src="{{ asset('video/' . $row->video) }}" type="video/mp4">
				<!-- If you have other video formats, you can add them here as well -->
				<!-- <source src="path/to/your/video.webm" type="video/webm"> -->
				<!-- <source src="path/to/your/video.ogv" type="video/ogg"> -->
			</video>
		</div>
	
		<p class="multiline-text">{{ $row->information }}</p>
		<span class="number">{{ $row->contact }}</span><p style="margin-left: 5px;" class="phone"> : بۆ پەیوەندیکردن</p>
		 <a href="{{ $row->location }}" class="aLocationShelter">
			<span class="address">{{ $row->address }}</span>
		<i class="location-icon fas fa-map-marker-alt"></i>
		 </a>
		 </section>
        </section>
		<div style="text-align: center;">
  @auth
  @if(auth()->user()->id == 1)
		<form class="formMissing" action="{{ route('shelter.destroy',$row->id) }}" method="POST">
	@csrf
	@method('DELETE')
	<a class="buttonEDS edit-btn aButtonShelter" href="#divEdit/{{$row->id}}" id="EditMSButton/{{$row->id}}">گۆڕین</a>
  <button type="submit" class="del buttonEDS" style="--color:#f3738a">سڕینەوە</button>
    
	</form> 
	@endif
@endauth
	</div>
	@include('pages.shelter.edit_shelter_page')	
@endforeach		
@else
<p class="noShelter">هیچ پەناگەیەکی ئاژەڵان نییە</p>
@endif
<br><br><br>		
<script src="https://kit.fontawesome.com/217328fb47.js" crossorigin="anonymous"></script>    
</body>
@include('footer')
</html>
