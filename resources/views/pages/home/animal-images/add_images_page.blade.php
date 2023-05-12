<div class="boxImages">
	<a class="buttonAddImages" href="#divAddAnimal" id="addImageButton">ئاژەڵەکەت زیادبکە</a>
</div>

<div class="overlay" id="divAddAnimal">
	<div class="wrapperImages">
		<h2>زیادکردن</h2><a class="close" href="#" id="closeButton">&times;</a>
		<div class="content">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<form class="formADDEdit" method="post" action="{{ route('species.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="rowaddImages mb-3">
								<label>ناوی ئاژەڵ</label>
								<div class="col-sm-10">
									<input type="text" name="pet_name" class="form-control" required/>
								</div>
							</div>
							<div class="rowaddImages mb-3">
								<label>جۆری ئاژەڵ</label>
								<div class="col-sm-10">
									<input type="text" name="species_name" class="form-control" required/>
								</div>
							</div>
							<div class="rowaddImages mb-4">
								<label>بەرواری لەدایکبوونی</label>
								<div class="col-sm-10">
								<input type="date" name="birth_date" class="form-control" required/>
								</div>
							</div>
							<div class="row mb-4">
				           <label class="col-sm-3 col-label-form">بارودۆخی</label>
				            <div class="col-sm-10">
					        <select name="state" class="form-control">
						    <option value="ماڵییە">ماڵییە</option>
						    <option value="کێوییە">کێوییە</option>
							<option value="لە فرۆشگای ئاژەڵانە">لە فرۆشگای ئاژەڵانە</option>
					        </select>
				            </div>
			                </div>
							<div class="rowaddImages mb-4">
								<label>وێنەی ئاژەڵەکە</label>
								<div class="col-sm-10">
									<input type="file" name="images" required/>
								</div>
							</div>
							<div class="rowaddImages mb-3">
								<label>زانیاری</label>
								<div class="col-sm-10">
									<input type="text" name="notes" class="form-control" required/>
								</div>
							</div>
							<div class="text-center">
								<input class="buttonForm" type="submit" value="ناردن"/>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>