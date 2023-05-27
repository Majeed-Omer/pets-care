<div class="overlay" id="divEdit/{{$row->id}}">
		<div class="wrapperImages">
			<h2 class="edit-header">گۆڕین</h2><a class="close" href="#" id="closeButtonEdit/{{$row->id}}">&times;</a>
			<div class="content">
				<div class="container">
					<div class="card">
						<div class="card-body">
							<form class="formADDEdit" method="post" action="{{ route('pet_clinic.update', $row->id) }}" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="rowaddImages mb-1">
									<label class="label">ناوی کلینیک</label>
									<div>
										<input type="text" name="name" class="form-control" value="{{ $row->name }}" required/>
									</div>
								</div>
								<div class="rowaddImages mb-1">
									<label class="label">ئیمێڵی کلینیک</label>
									<div>
										<input type="text" name="email" class="form-control" value="{{ $row->email }}" required/>
									</div>
								</div>
							   <div class="rowaddImages mb-2" required>
								   <label class="label">ژەمارەی مۆبایل</label>
								   <div>
								   <input type="tel" name="phone_number" class="form-control" value="{{ $row->phone_number }}" required/>
								   </div>
							   </div>
							   <div class="rowaddImages mb-1">
									<label class="label">ناونیشان</label>
									<div>
										<input type="text" name="address" class="form-control" value="{{ $row->address }}" required/>
									</div>
								</div>
								<div class="rowaddImages mb-1">
									<label class="label">لۆکەیشن</label>
									<div>
										<input type="text" name="location" class="form-control" value="{{ $row->location }}" required/>
									</div>
								</div>
								<div class="rowaddImages mb-1">
									<label class="label">ناوی پزیشک</label>
									<div>
										<input type="text" name="veterinarian" class="form-control" value="{{ $row->veterinarian }}" required/>
									</div>
								</div>
								<div class="text-center">
									<input type="hidden" name="hidden_id" value="{{ $row->id }}" />
									<input class="buttonForm" type="submit" value="ناردن" />
								</div>	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script>
		document.getElementById("EditPet_clinicButton/{{$row->id}}").addEventListener("click", function(event) {
    document.getElementById("divEdit/{{$row->id}}").style.display = "block";
  });
  
  document.getElementById("closeButtonEdit/{{$row->id}}").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("divEdit/{{$row->id}}").style.display = "none";
  window.history.pushState({}, '', '/');
  });
	</script>