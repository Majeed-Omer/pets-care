<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="css/shelter.css">
<title>پەناگەی ئاژەڵان</title>
@include('header')
	
</head>
<body class="bodyShelter">

@if(count($data) > 0)

@foreach($data as $row)
		<h1 class="h1Selter">{{ $row->name }}</h1>
	
	<div class="video-container">
		<video autoplay loop muted>
			<source src="{{ $row->video }}" type="video/mp4">
			<!-- If you have other video formats, you can add them here as well -->
			<!-- <source src="path/to/your/video.webm" type="video/webm"> -->
			<!-- <source src="path/to/your/video.ogv" type="video/ogg"> -->
		</video>
	</div>
	
  <p class="multiline-text">{{ $row->information }}</p>
     <a href="{{ $row->location }}" class="aLocationShelter">
		<span class="address">{{ $row->address }}</span>
    <i class="location-icon fas fa-map-marker-alt"></i>
     </a>
	 <br><br><br><br><br><br><br><br>
     @endforeach		
@else
	<p class="noShelter">هیچ پەناگەیەکی ئاژەڵان نییە</p>
@endif
    <script src="https://kit.fontawesome.com/217328fb47.js" crossorigin="anonymous"></script>    
</body>
@include('footer')
</html>