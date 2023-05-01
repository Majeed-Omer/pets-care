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
			<source src="video/videoplayback.mp4" type="video/mp4">
			<!-- If you have other video formats, you can add them here as well -->
			<!-- <source src="path/to/your/video.webm" type="video/webm"> -->
			<!-- <source src="path/to/your/video.ogv" type="video/ogg"> -->
		</video>
	</div>
	
  <p class="multiline-text">
	پزیشکانی ڤێتێرنەری ئەم سەگە بەرەڵایانە بە مەترسیدار دەبینن، چونکە هۆکارێکی گواستنەوەی چەندین ڤایرۆس و نەخۆشین بۆ مرۆڤەکان، بۆیە لە وڵاتانی پێشکەوتوو لە شێڵتەرێکی تایبەت رادەگیرێن، دواتر کرداری خەساندن و هەڵگرتنی ئەندامی زاوزێ و کوتانیان بۆ ئەنجامدەدرێت و ئازاد دەکرێنەوە.
مستەفا محەممەد زەکی، پزیشکی ڤێتێرنەری دەڵێت "سەگەکانی خۆمان زۆر زیرەکن، ئەزموونی خۆمان هەیە، چەندین سەگمان بەخشیوە بە خەڵک دوای خەساندن، زۆر زیرەک و بەسوودن، سەگی بەرەڵا لە جادەیە، نە ڤاکسینی بۆ کراوە و نە دەرمان کراوە، بە دڵنیاییەوە تووشی نەخۆشی دەبێت و ئەو نەخۆشییەش دەگوازێتە بۆ هاونیشتمانیان".
ساڵی 2019 شێڵتەرێک لەسەر رووبەری دوو دۆنم زەوی لە هەولێر دروستکراوە و لەلایەن 20 ئاژەڵدۆست بەشێوەیەکی خۆبەخشانە بەڕێوەدەبرێت، لەوێ هەفتانە 10 سەگ نەزۆک دەکرێن، ئێستا تەنها 150 سەگ لەو شێڵتەرە دەمێننەوە.
نەبەز عەبدولحەمید، قایمقامی هەولێر دەڵێت "بەرنامەمان ئەوەیە شێڵتەرێکی گەورە دروستبکەین بەپێی هەموو تایبەتمەندییەکان کە پێویستن، ئەوکات کە ئەو شێڵتەرە دروستکرا دەتوانرێت ئەو سەگانە لەوێ کۆبکرێنەوە و لەڕێگەی پزیشکانی ڤێتێرنەری یان تیمی شارەوانی دەتوانرێت سەگەکان بخەسێنرێن و ئەگەر ڤاکسینیان لێبدەین رەوانەی ناو شەقامەکانیان بکەینەوە".
	</p>
     <a href="https://www.google.com/maps/place/Erbil+Animal+Shelter/@36.1780663,43.8994521,17z/data=!3m1!4b1!4m6!3m5!1s0x400717706407f8d3:0x25681399a3c76535!8m2!3d36.1780663!4d43.8994521!16s%2Fg%2F11fksms4cs" class="aLocationShelter">
		<span class="address">{{ $row->address }}</span>
    <i class="location-icon fas fa-map-marker-alt"></i>
     </a>
	 <br><br><br><br><br><br><br><br>
     @endforeach		
@else
	<tr>
		<td colspan="5" class="text-center">هیچ پەناگەک نییە</td>
	</tr>
@endif
    <script src="https://kit.fontawesome.com/217328fb47.js" crossorigin="anonymous"></script>    
</body>
@include('footer')
</html>
