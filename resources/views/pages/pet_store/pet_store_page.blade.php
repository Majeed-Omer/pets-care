<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pet_store.css">
  <title>فرۆشگای ئاژەڵان</title>
  @include('header')

</head>
<body class="bodyCardS">
<br><br>
@include('pages.pet_store.add_pet_store') 
<br>
 @if(count($data) > 0)

@foreach($data as $row) 
            <div class="card-wrapperStore">
        <div class="BussinessCardStore">
            <div  class="card-back" >
                <div class="left">
                    <img class="imgPetStore" src="myImages/logo2-removebg.png" alt="">
                </div>
                <div class="rightStoreCard">
                    <div class="personStore right-contentStore">
                        <i class="fas fa-user-alt iCardStore iperson"></i>
                        <div>
                            <h4>{{ $row->owner }}</h4>
                        </div>
                    </div>

                    <div class="phoneStore right-contentStore">
                        <i class="fas fa-mobile-alt iCardStore"></i>
                        <div>
                            <p>{{ $row->phone_number }}</p>
                        </div>
                    </div>

                    <div class="emailStore right-contentStore">
                        <i class="fas fa-envelope-open-text iCardStore"></i>
                        <div>
                            <p>{{ $row->email }}</p>
                        </div>
                    </div>
                    <a class="pLocationStore" href="{{ $row->location }}">
                        <div class="locationStore right-contentStore">
                        <i class="fas fa-map-marker-alt iCardStore"></i>
                        <div>
                            <p class="pLocationStore">{{ $row->address }}</p>
                        </div>
                    </div>
                    </a>
                    
                </div>
            </div>

            <div class="card-front">
                <img class="imgFrontStore" src="myImages/logo2-removebg.png" alt="">
                <div class="rightStoreCard">
                    <div class="right-content1">
                        <div>
                            <h4 class="h4Store1">فرۆشگای</h4>
                            <h4 class="h4Store2">{{ $row->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <img src="/myImages/b_store_cat.png" alt="cat" width=30% heigth=30% class="imgCatCart">
    <img src="/myImages/b_dog_store.png" alt="dog" width=30% heigth=30% class="imgDogCart">
  
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div style="text-align: center;" class="pet_store_buttons">

  @auth
  @if(auth()->user()->id == 1)
		<form class="formMissing" action="{{ route('pet_store.destroy',$row->id) }}" method="POST">
	@csrf
	@method('DELETE')
	<a class="buttonEDS edit-btn aButtonsAnimals" href="#divEdit/{{$row->id}}" id="EditPet_clinicButton/{{$row->id}}">گۆڕین</a>
  <button type="submit" class="del buttonEDS" style="--color:#f3738a">سڕینەوە</button>
    
	</form>
    
	@endif
@endauth
@include('pages.pet_store.edit_pet_store')
</div>	
	 @endforeach		

@else
<p class="noStore">هیچ ستۆرەک نییە</p>
@endif
<br><br><br><br><br><br>
</body>
@include('footer')

</html>

