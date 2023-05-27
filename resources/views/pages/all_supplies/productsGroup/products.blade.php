<div id="food-cat" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 1)

@include('pages.all_supplies.productsGroup.catFoods')

@endif  
@endforeach	
@else
	<tr>
    <p class="nosuff">هیچ خواردنەک نییە</p>
	</tr>
@endif 
</div>
</div>



<div id="product-cat" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 2)

@include('pages.all_supplies.productsGroup.catProducts')

@endif  
@endforeach	
@else
	<tr>
    <p class="nosuff">هیچ پێداویستییەک نییە</p>
	</tr>
@endif 
</div>
</div>



<div id="food-dog" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 3)

@include('pages.all_supplies.productsGroup.dogFoods')

@endif  
@endforeach	
@else
	<tr>
    <p class="nosuff">هیچ خواردنەک نییە</p>
	</tr>
@endif 
</div>
</div>


<div id="product-dog" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 4)

@include('pages.all_supplies.productsGroup.dogProducts')

@endif  
@endforeach	
@else
	<tr>
    <p class="nosuff">هیچ پێداویستییەک نییە</p>
	</tr>
@endif 
</div>
</div>


<div id="food-bird" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 5)

@include('pages.all_supplies.productsGroup.birdFoods')

@endif  
@endforeach	
@else
	<tr>
    <p class="nosuff">هیچ خواردنەک نییە</p>
	</tr>
@endif 
</div>
</div>


<div id="product-bird" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 6)

@include('pages.all_supplies.productsGroup.birdProducts')

@endif  
@endforeach	
@else
	<tr>
    <p class="nosuff">هیچ پێداویستییەک نییە</p>
	</tr>
@endif 
</div>
</div>


<div id="food-poultry" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 7)

@include('pages.all_supplies.productsGroup.poultryFoods')

@endif  
@endforeach	
@else
	<tr>
    <p class="nosuff">هیچ خواردنەک نییە</p>
	</tr>
@endif 
</div>
</div>


<div id="product-poultry" class="section">
<div class="grid-container">
@if(count($product) > 0)   
@foreach($product as $row) 

@if($row->animal_id == 8)

@include('pages.all_supplies.productsGroup.poultryProducts')

@endif  
@endforeach	
@else
	<tr>
    <p class="nosuff">هیچ پێداویستییەک نییە</p>
	</tr>
@endif 
</div>
</div>