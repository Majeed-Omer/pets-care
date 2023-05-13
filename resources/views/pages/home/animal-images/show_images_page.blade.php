<div class="overlay" id="divShowAnimal/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2 class="show-header">پیشاندان</h2><a class="close" href="#" id="closeShowImages/{{$row->id}}">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">
			

			<div class="mb-2">
				<div class="con-img">
					<img src="{{ asset('images/' . $row->images) }}" class="imgShowAnimals"/>
					<input type="hidden" name="hidden_picture" value="{{ $row->picture }}" />
				</div>
			</div>
			
		<p class="show-p"><span class="show-sp">ناو : </span> {{ $row->pet_name }}</p>
		<p class="show-p"> <span class="show-sp"> جۆری :  </span>{{ $row->species_name }}</p>
      	<p class="show-p"><span class="show-sp">بەواری لەدایکبوونی : </span> {{ $row->birth_date }}</p>
		<p class="show-p"><span class="show-sp">بارودۆخی : </span> {{ $row->state }}</p>
		<p class="show-p"><span class="show-sp">وردەکاری زیاتر : </span>{{ $row->notes }}</p>

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
  
  document.getElementById("closeShowMSImage/{{$row->id}}").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("divShowAnimal/{{$row->id}}").style.display = "none";
  window.history.pushState({}, '', '/');
  });
</script>



