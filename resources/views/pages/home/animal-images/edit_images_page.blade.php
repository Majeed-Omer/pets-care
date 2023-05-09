<div class="overlay" id="divEditAnimal/{{$row->id}}">
		<div class="wrapperImages">
			<h2>گۆڕین</h2><a class="close" href="#" id="closeButtonEdit/{{$row->id}}">&times;</a>
			<div class="content">
				<div class="container">
					<div class="card">
						<div class="card-body">
							<form class="formADDEdit" method="post" action="{{ route('species.update', $row->id) }}" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="rowaddImages mb-1">
									<label>ناوی ئاژەڵ</label>
									<div class="col-sm-10">
										<input type="text" name="pet_name" class="form-control" value="{{ $row->pet_name }}" required/>
									</div>
								</div>
								<div class="rowaddImages mb-1">
									<label>جۆری ئاژەڵ</label>
									<div class="col-sm-10">
										<input type="text" name="species_name" class="form-control" value="{{ $row->species_name }}" required/>
									</div>
								</div>
								<div class="rowaddImages mb-2">
									<label>لەدایکبوونی</label>
									<div class="col-sm-10">
									<input type="date" name="birth_date" class="form-control" value="{{ $row->birth_date }}" required/>
									</div>
								</div>
								<div class="row mb-2">
				               <label class="col-sm-3 col-label-form">بارودۆخی</label>
				              <div class="col-sm-10">
				              <select name="state" class="form-control">
						      <option value="ماڵییە">ماڵییە</option>
						      <option value="کێوییە">کێوییە</option>
							  <option value="لەفرۆشگای ئاژەڵانە">لەفرۆشگای ئاژەڵانە</option>
					          </select>
				              </div>
			                   </div>
								<div class="rowaddImages mb-2">
									<label >وێنەی</label>
									<div class="col-sm-10">
										<input type="file" name="images" />
										<img src="{{ asset('images/' . $row->images) }}" width="100" class="img-thumbnail" />
										<input type="hidden" name="hidden_images" value="{{ $row->images }}"/>
									</div>
								</div>
								<div class="rowaddImages mb-2" required>
									<label>زانیاری</label>
									<div class="col-sm-10">
									<input type="text" name="notes" class="form-control" value="{{ $row->notes }}"/>
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
		document.getElementById("EditImageButton/{{$row->id}}").addEventListener("click", function(event) {
    document.getElementById("divEditAnimal/{{$row->id}}").style.display = "block";
  });
  
  document.getElementById("closeButtonEdit/{{$row->id}}").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("divEditAnimal/{{$row->id}}").style.display = "none";
  window.history.pushState({}, '', '/');
  });
	</script>