<div id="medicine-cat" class="section">
<div class="grid-container">
@if(count($medicine) > 0)  
@foreach($medicine as $row) 

@if($row->animal_id == 1)
	<div class="grid-item">
    <img src="myImages/cat_star.png" alt="Product 1" class="imgSupplies">
    <h3>{{ $row->medicine_name }}</h3>
    <p class="priceP">{{ $row->medicine_price }}</p>
	</div>
@endif  
@endforeach	
</div>
</div>

<div id="medicine-dog" class="section">
<div class="grid-container">
@foreach($medicine as $row) 

@if($row->animal_id == 2)
	<div class="grid-item">
    <img src="myImages/simparica.png" alt="Product 1" class="imgSupplies">
    <h3>{{ $row->medicine_name }}</h3>
    <p class="priceP">{{ $row->medicine_price }}</p>
	</div>
@endif    
@endforeach	
</div>
</div>

<div id="medicine-bird" class="section">
<div class="grid-container">
@foreach($medicine as $row) 

@if($row->animal_id == 3)
	<div class="grid-item">
    <img src="myImages/B-Complex.png" alt="Product 1" class="imgSupplies">
    <h3>{{ $row->medicine_name }}</h3>
    <p class="priceP">{{ $row->medicine_price }}</p>
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