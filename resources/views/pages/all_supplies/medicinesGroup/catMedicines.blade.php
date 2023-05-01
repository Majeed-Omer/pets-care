<a class="aStuff" href="#divShowMedicine/{{$row->id}}">
	<div class="grid-item">
    <img src="myImages/cat_star.png" alt="cat food" class="imgSupplies">
    <h3 class="stuffName">{{ $row->medicine_name }}</h3>
    <p class="priceP">{{ $row->medicine_price }}</p>
	</div>
</a>
    
<div class="overlay" id="divShowMedicine/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2>پیشاندان</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">

			<div>
				<div class="col-sm-15">
					<img src="myImages/cat_star.png" width="100%" class="imgShowAnimals"/>
				</div>
			</div>
      <h3 class="textStuff">{{ $row->medicine_name }}</h3>
      <p class="textStuff">{{ $row->medicine_contents }}</p>
	  <p class="textStuff">دەستدەکەوێت لە <a class="aStuffAnimalAll" href="{{ $row->clinic_location }}"><b>{{ $row->clinic_name }}</b></a></p>
		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>