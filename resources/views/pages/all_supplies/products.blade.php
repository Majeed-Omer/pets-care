<div id="product-cat" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 1)
	<div class="grid-item">
    <img src="myImages/cat_collars.png" alt="Product 1" class="imgSupplies">
    <h3>{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_price }}</p>
	</div>
@endif  
@endforeach	
</div>
</div>

<div id="product-dog" class="section">
<div class="grid-container">
@foreach($product as $row) 

@if($row->animal_id == 2)
	<div class="grid-item">
    <img src="myImages/dog_food.png" alt="dog food" class="imgSupplies">
    <h3>{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_price }}</p>
	</div>
@endif    
@endforeach	
</div>
</div>

<div id="product-bird" class="section">
<div class="grid-container">
@foreach($product as $row) 

@if($row->animal_id == 3)
	<div class="grid-item">
    <img src="myImages/bird_food.png" alt="bird food" class="imgSupplies">
    <h3>{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_price }}</p>
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