<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/missing_pets.css" rel="stylesheet" type="text/css">

</head>
<body class="bodyGrideView">

<div class="item">

<button class="buttonBack" onclick="location.href='/'"><i class="fa fa-long-arrow-left arrow1" aria-hidden="true"></i> 
<span class="textboMalua">بۆ ماڵەوە</span>   
</button>

</div>

<br><br>

@include('pages.missing-pets.add_missing_pets_page')

<br><br><br><br>

@if(count($data) > 0)

<div class="grid-container">

@foreach($data as $row) 
  <div class="grid-item">
	<div class="cardAddImages">
  <img src="{{ asset('picture/' . $row->picture) }}" class="imgMissing">
  <div class="card-buttons">
  @if($row->user_id == auth()->id())
  <form class="formMissing" action="{{ route('stolen_missing.destroy',$row->id) }}" method="POST">
	@csrf
	@method('DELETE')
	<a class="buttonEdit" href="#divEdit/{{$row->id}}">گۆڕین</a>
    <button type="submit" class="buttonDelete">سڕینەوە</button>
	</form> 
  @endif
  <a class="buttonShow" href="#divShow/{{$row->id}}">پیشاندان</a>
  </div>
  </div>
  </div>   

  @include('pages.missing-pets.edit_missing_pets_page')

  @include('pages.missing-pets.show_missing_pets_page')

  @endforeach  
</div>
	
<br><br><br>

	@else
	<tr>
		<td colspan="5" class="text-center">هیچ وێنەیەک نییە</td>
	</tr>
@endif
<script src="js/addMissingImage.js"></script>

<script src="https://kit.fontawesome.com/217328fb47.js" crossorigin="anonymous"></script>

</body>
</html>

