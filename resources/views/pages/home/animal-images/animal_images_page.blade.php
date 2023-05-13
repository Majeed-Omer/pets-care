@extends('pages.home.home')
@section('content')

<link href="css/home/addImages.css" rel="stylesheet" type="text/css">

@include('pages.home.animal-images.add_images_page')
<br><br><br>

@if(count($data) >  0)
<div class="grid-container" id="animalCardsContainer">
@foreach($data as $row)
@if($row->approval	=== 1)
  <div class="cardAnimals">
        <div class="imgBx">
            <img src="{{ asset('images/' . $row->images) }}">
        </div>
        <div class="details">
  @if($row->user_id == auth()->id() || auth()->id() === 1) 
  <form class="formAnimal" action="{{ route('species.destroy',$row->id) }}" method="POST">
	@csrf
	@method('DELETE')
	<a class="buttonEDS aButtonsAnimals" href="#divEditAnimal/{{$row->id}}" id="EditImageButton/{{$row->id}}">گۆڕین</a>
    <button type="submit" class="buttonEDS"  style="--color:#f3738a">سڕینەوە</button>  
	</form> 
  @endif
  <a class="buttonEDS aButtonsAnimals" href="#divShowAnimal/{{$row->id}}" style="--color:#048f39"  id="ShowImageButton/{{$row->id}}">پیشاندان</a>

  </div>
  </div>
  
@include('pages.home.animal-images.show_images_page')

@include('pages.home.animal-images.edit_images_page')
@endif
@endforeach
</div>
@else

<p class="noAnimals">هیچ وێنەیەک نییە</p>
@endif
@endsection

