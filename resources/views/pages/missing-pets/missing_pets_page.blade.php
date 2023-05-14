<!DOCTYPE html>
<html>
<head>
<title>ئاژەڵە بزربووەکان</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/missing_pets.css" rel="stylesheet" type="text/css">
<link href="css/cat.css" rel="stylesheet">


</head>
<body class="bodyGrideView">

<div class="item">

<button class="buttonBack" onclick="location.href='/'"><i class="fa fa-long-arrow-left arrow1" aria-hidden="true"></i> 
<span class="textboMalua">بۆ ماڵەوە</span>   
</button>

</div>

<br><br>
<div class="cat">
	<div class="ear ear--left"></div>
	<div class="ear ear--right"></div>
	<div class="face">
		<div class="eye eye--left">
			<div class="eye-pupil"></div>
		</div>
		<div class="eye eye--right">
			<div class="eye-pupil"></div>
		</div>
		<div class="muzzle"></div>
	</div>
</div>
<p class="lead missing-p">ئێرە بەشی ئاژەڵە ونبووەکانە<br> لەم بەشەدا دەتوانی زانیاری دەربارەی<br> ئاژەڵە ونبووەکەت تۆمار بکەی بۆ ئەوەی ئاسانتر<br> بیدۆزیتەوە لە ڕێگەی ماڵپەرەکەمانەوە</p>
<br><br>

@include('pages.missing-pets.add_missing_pets_page')

<br><br><br><br>

@if(count($data) > 0)

<div class="grid-container">

@foreach($data as $row) 
@if($row->approval	=== 1)
  <div class="cardMissing" style="display: none;">
        <div class="imgBx">
            <img src="{{ asset('picture/' . $row->picture) }}" class="imgMissing">
        </div>
        <div class="details">
  @if($row->user_id == auth()->id()  || auth()->id() === 1)
  <form class="formMissing" action="{{ route('stolen_missing.destroy',$row->id) }}" method="POST">
	@csrf
	@method('DELETE')
	<a class="buttonEDS edit-btn aButtonsMissing" href="#divEdit/{{$row->id}}" id="EditMSButton/{{$row->id}}">گۆڕین</a>
  <button type="submit" class="del buttonEDS" style="--color:#f3738a">سڕینەوە</button>
    
	</form> 
  @endif
  <a class="buttonEDS aButtonsMissing" href="#divShow/{{$row->id}}" style="--color:#048f39"  id="ShowMSButton/{{$row->id}}">پیشاندان</a>
  
        </div>
      </div>

  @include('pages.missing-pets.edit_missing_pets_page')

  @include('pages.missing-pets.show_missing_pets_page')
  @endif
  @endforeach  
</div>
	
<br><br><br>

	@else
	<p class="noMissingStolen">هیچ ئاژەڵەکی بزربوو نییە</p>
@endif
<script src="js/addMissingImage.js"></script>

<script src="https://kit.fontawesome.com/217328fb47.js" crossorigin="anonymous"></script>


</body>
</html>
