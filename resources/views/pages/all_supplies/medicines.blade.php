<div id="medicine-cat" class="section">
<div class="grid-container">
@if(count($medicine) > 0)  
@foreach($medicine as $row) 

@if($row->animal_id == 1)
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
      <h3>{{ $row->medicine_name }}</h3>
      <p class="priceP">{{ $row->medicine_contents }}</p>

		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>
@endif  
@endforeach	
</div>
</div>

<div id="medicine-dog" class="section">
<div class="grid-container">
@foreach($medicine as $row) 

@if($row->animal_id == 2)
<a class="aStuff" href="#divShowMedicine/{{$row->id}}">
	<div class="grid-item">
    <img src="myImages/simparica.png" alt="dog food" class="imgSupplies">
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
					<img src="myImages/simparica.png" width="100%" class="imgShowAnimals"/>
				</div>
			</div>
      <h3>{{ $row->medicine_name }}</h3>
      <p class="priceP">{{ $row->medicine_contents }}</p>

		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>
@endif    
@endforeach	
</div>
</div>

<div id="medicine-bird" class="section">
<div class="grid-container">
@foreach($medicine as $row) 

@if($row->animal_id == 3)
<a class="aStuff" href="#divShowMedicine/{{$row->id}}">
	<div class="grid-item">
    <img src="myImages/B-Complex.png" alt="Product 1" class="imgSupplies">
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
					<img src="myImages/B-Complex.png" width="100%" class="imgShowAnimals"/>
				</div>
			</div>
      <h3>{{ $row->medicine_name }}</h3>
      <p class="priceP">{{ $row->medicine_contents }}</p>

		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>
@endif    
@endforeach	
@else
	<tr>
        <p class="nosuff">هیچ دەرمانەک نییە</p>
	</tr>
@endif 
</div>
</div>