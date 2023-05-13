<div class="boxImages">
	<a class="buttonAddImages" href="#divAddAnimal" id="addImageButton">ئاژەڵەکەت زیادبکە</a>
</div>

<div class="overlay" id="divAddAnimal">
	<div class="wrapperImages">
		<h2 class="add-header">زیادکردن</h2><a class="close" href="#" id="closeButton">&times;</a>
		<div class="content">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<form class="formADDEdit" method="post" action="{{ route('species.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="rowaddImages mb-3">
								<label	class="label">ناوی ئاژەڵ</label>
								<div>
									<input type="text" name="pet_name" class="form-control" required/>
								</div>
							</div>
							<div class="rowaddImages mb-3">
								<label	class="label">جۆری ئاژەڵ</label>
								<div>
									<input type="text" name="species_name" class="form-control" required/>
								</div>
							</div>
							<div class="rowaddImages mb-4">
								<label	class="label">بەرواری لەدایکبوونی</label>
								<div>
								<input type="date" name="birth_date" class="form-control" required/>
								</div>
							</div>
							<div class="row mb-4">
				           <label class="label">بارودۆخی</label>
				            <div>
					        <select name="state" class="state form-control">
						    <option class="state" value="ماڵییە">ماڵییە</option>
						    <option class="state" value="کێوییە">کێوییە</option>
							<option class="state" value="لە فرۆشگای ئاژەڵانە">لە فرۆشگای ئاژەڵانە</option>
					        </select>
				            </div>
			                </div>
							<div class="rowaddImages mb-4">
								<label class="label file-label">وێنەی ئاژەڵەکە</label>
								<div>
									<input type="file" name="images" class="picture" required/>
								</div>
							</div>
							<div class="rowaddImages mb-3">
								<label	class="label">زانیاری</label>
								<div>
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