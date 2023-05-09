<div class="overlay" id="divShowAnimal/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2>پیشاندان</h2><a class="close" href="#" id="closeShowImages/{{$row->id}}">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">
			

			<div class="row mb-4">
				<div class="col-sm-10">
					<img src="{{ asset('images/' . $row->images) }}" width="100%" class="imgShowAnimals"/>
					<input type="hidden" name="hidden_picture" value="{{ $row->picture }}" />
				</div>
			</div>
			
		<p style="text-align: right"><span> ناو</span> {{ $row->pet_name }}</p>
		<p style="text-align: right"> <span>جۆری </span>{{ $row->species_name }}</p>
      	<p style="text-align: right"><span> بەرواری لەدایکبوونی</span> {{ $row->birth_date }}</p>
		  <p style="text-align: right"><span>بارودۆخی</span> {{ $row->state }}</p>
		<p style="text-align: right"><span> وردەکاری زیاتر</span>{{ $row->notes }}</p>

		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>

<script>
	document.getElementById("ShowImageButton/{{$row->id}}").addEventListener("click", function(event) {
    document.getElementById("divShowAnimal/{{$row->id}}").style.display = "block";
  });
  
  document.getElementById("closeShowImages/{{$row->id}}").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("divShowAnimal/{{$row->id}}").style.display = "none";
  window.history.pushState({}, '', '/');
  });
</script>



