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
                        <i class="fas fa-user-alt iCardStore"></i>
                        <div>
                            <h4>{{ $row->seller }}</h4>
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
                    <a class="pLocationStore" href="https://www.google.com/maps/place/Sardam+Veterinary+Clinic/@36.1787118,43.9904005,17z/data=!3m1!4b1!4m6!3m5!1s0x400723cb7d747fcf:0xf348d08620ceef16!8m2!3d36.1787118!4d43.9904005!16s%2Fg%2F11rb56cfzy">
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	 @endforeach		

@else
	<tr>
		<td colspan="5" class="text-center">هیچ ستۆرەک نییە</td>
	</tr>
@endif
<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
@include('footer')

</html>

