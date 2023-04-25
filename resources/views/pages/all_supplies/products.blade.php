
<div id="product-cat" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 1)
<a class="aStuff" href="#divShowProduct/{{$row->id}}">
  <div class="grid-item">
    <img src="myImages/cat_collars.png" alt="Product 1" class="imgSupplies">
    <h3 class="stuffName">{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_price }}</p>
	</div>
</a>
	

<div class="overlay" id="divShowProduct/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2>پیشاندان</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">

			<div>
				<div class="col-sm-15">
					<img src="myImages/cat_collars.png" width="100%" class="imgShowAnimals"/>
				</div>
			</div>
      <h3>{{ $row->product_name }}</h3>
      <p class="priceP">{{ $row->product_contents }}</p>

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



<div id="product-dog" class="section">
<div class="grid-container">
@foreach($product as $row) 

@if($row->animal_id == 2)
  <a class="aStuff" href="#divShowProduct/{{$row->id}}">
	<div class="grid-item">
    <img src="myImages/dog_food.png" alt="dog food" class="imgSupplies">
    <h3 class="stuffName">{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_price }}</p>
	</div>
  </a>

	<div class="overlay" id="divShowProduct/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2>پیشاندان</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">
			<div>
				<div class="col-sm-15">
					<img src="myImages/dog_food.png" alt="dog food" width="100%" class="imgShowAnimals"/>
				</div>
			</div>
			
      <h3>{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_contents }}</p>

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

<div id="product-bird" class="section">
<div class="grid-container">
@foreach($product as $row) 

@if($row->animal_id == 3)
    <a class="aStuff" href="#divShowProduct/{{$row->id}}">
	<div class="grid-item">
    <img src="myImages/bird_food.png" alt="bird food" class="imgSupplies">
    <h3 class="stuffName">{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_price }}</p>
	</div>
    </a>

	<div class="overlay" id="divShowProduct/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2>پیشاندان</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">
			<div>
				<div class="col-sm-15">
					<img src="myImages/bird_food.png" alt="bird food" width="100%" class="imgShowAnimals"/>
				</div>
			</div>
			
      <h3>{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_contents }}</p>

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
    <p class="nosuff">هیچ پێداویستییەک نییە</p>
	</tr>
@endif 
</div>
</div>

