@extends('pages.home.home')
@section('content')

<link href="css/home/addImages.css" rel="stylesheet" type="text/css">

@include('pages.home.animal-images.add_images_page')
<br><br><br>

@if(count($data) > 0)
<div class="grid-container">
@foreach($data as $row)


<div class="grid-item">
	<div class="cardAddImages">
  <img src="{{ asset('images/' . $row->images) }}" class="imgAnimals">
  <div class="card-buttons">
  @if($row->user_id == auth()->id())  
  <form class="formAnimal" action="{{ route('animal.destroy',$row->id) }}" method="POST">
	@csrf
	@method('DELETE')
	<a class="buttonEdit" href="#divEditAnimal/{{$row->id}}">گۆڕین</a>
    <button type="submit" class="buttonDelete">سڕینەوە</button>  
	</form> 
  @endif
  <a class="buttonShow" href="#divShowAnimal/{{$row->id}}">پیشاندان</a>

  </div>
  </div>
  </div>
  
@include('pages.home.animal-images.show_images_page')

@include('pages.home.animal-images.edit_images_page')
@endforeach
</div>
@else

<tr>
	<td colspan="5" class="text-center">هیچ وێنەیەک نییە</td>
</tr>

@endif
@endsection
