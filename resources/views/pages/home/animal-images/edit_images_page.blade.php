<div class="overlay" id="divEditAnimal/{{$row->id}}">
		<div class="wrapperImages">
			<h2>گۆڕین</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<div class="card">
						<div class="card-body">
							<form class="formADDEdit" method="post" action="{{ route('animal.update', $row->id) }}" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="rowaddImages mb-3">
									<label>ناوی ئاژەڵ</label>
									<div class="col-sm-10">
										<input type="text" name="name" class="form-control" value="{{ $row->name }}" />
									</div>
								</div>
								<div class="rowaddImages mb-3">
									<label>جۆری ئاژەڵ</label>
									<div class="col-sm-10">
										<input type="text" name="species" class="form-control" value="{{ $row->species }}" />
									</div>
								</div>
								<div class="rowaddImages mb-4">
									<label>لەدایکبوونی</label>
									<div class="col-sm-10">
									<input type="date" name="birth_date" class="form-control" value="{{ $row->birth_date }}" />
									</div>
								</div>
								<div class="rowaddImages mb-4">
									<label >وێنەی</label>
									<div class="col-sm-10">
										<input type="file" name="images" />
										<img src="{{ asset('images/' . $row->images) }}" width="100" class="img-thumbnail" />
										<input type="hidden" name="hidden_images" value="{{ $row->images }}" />
									</div>
								</div>
								<div class="rowaddImages mb-4">
									<label>زانیاری</label>
									<div class="col-sm-10">
									<input type="text" name="notes" class="form-control" value="{{ $row->notes }}" />
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