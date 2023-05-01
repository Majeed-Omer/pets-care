<div id="medicine-cat" class="section">
<div class="grid-container">
@if(count($medicine) > 0)  
@foreach($medicine as $row) 

@if($row->animal_id == 1)

@include('pages.all_supplies.medicinesGroup.catMedicines')

@endif  
@endforeach
@else
	<tr>
        <p class="nosuff">هیچ دەرمانەک نییە</p>
	</tr>
@endif	
</div>
</div>

<div id="medicine-dog" class="section">
<div class="grid-container">
@if(count($medicine) > 0)  
@foreach($medicine as $row) 

@if($row->animal_id == 2)

@include('pages.all_supplies.medicinesGroup.dogMedicines')

@endif    
@endforeach	
@else
	<tr>
        <p class="nosuff">هیچ دەرمانەک نییە</p>
	</tr>
@endif
</div>
</div>

<div id="medicine-bird" class="section">
<div class="grid-container">
@if(count($medicine) > 0)  	
@foreach($medicine as $row) 

@if($row->animal_id == 3)

@include('pages.all_supplies.medicinesGroup.birdMedicines')

@endif    
@endforeach	
@else
	<tr>
        <p class="nosuff">هیچ دەرمانەک نییە</p>
	</tr>
@endif 
</div>
</div>