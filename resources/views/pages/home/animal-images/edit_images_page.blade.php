<div class="overlay" id="divEditAnimal/{{$row->id}}">
		<div class="wrapperImages">
			<h2 class="edit-header">گۆڕین</h2><a class="close" href="#" id="closeButtonEdit/{{$row->id}}">&times;</a>
			<div class="content">
				<div class="container">
					<div class="card">
						<div class="card-body">
							<form class="formADDEdit" method="post" action="{{ route('species.update', $row->id) }}" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="rowaddImages mb-1">
									<label class="label">ناوی ئاژەڵ</label>
									<div>
										<input type="text" name="pet_name" class="form-control" value="{{ $row->pet_name }}" required/>
									</div>
								</div>
								<div class="rowaddImages mb-1">
									<label class="label">جۆری ئاژەڵ</label>
									<div>
										<input type="text" name="species_name" class="form-control" value="{{ $row->species_name }}" required/>
									</div>
								</div>
								<div class="rowaddImages mb-2">
									<label class="label">لەدایکبوونی</label>
									<div>
									<input type="date" name="birth_date" class="form-control" value="{{ $row->birth_date }}" required/>
									</div>
								</div>
								<div class="mb-2">
				               <label class="label">بارودۆخی</label>
				              <div>
				              <select name="state" class="state form-control">
						      <option class="state" value="ماڵییە">ماڵییە</option>
						      <option class="state" value="کێوییە">کێوییە</option>
							  <option class="state" value="لەفرۆشگای ئاژەڵانە">لەفرۆشگای ئاژەڵانە</option>
					          </select>
				              </div>
			                   </div>
							   <div class="rowaddImages mb-2" required>
								   <label class="label">زانیاری</label>
								   <div>
								   <input type="text" name="notes" class="form-control" value="{{ $row->notes }}"/>
								   </div>
							   </div>
								<div class="rowaddImages mb-2">
									<label class="label">وێنەی</label>
									<div class="image-edit">
										<input type="file" name="images" class="picture pic-edit"/>
										<p class="edit-p">: وێنەی پێشوو</p>
										<img src="{{ asset('images/' . $row->images) }}" width="100" class="img-thumbnail" />
										<input type="hidden" name="hidden_images" value="{{ $row->images }}"/>
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