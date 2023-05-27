@auth
  @if(auth()->user()->id == 1)
<div class="boxImages">
	<a class="buttonAddClinic" href="#divAddMedicines" id="addImageButton">دەرمانەک زیادبکە</a>
</div>
@endif
@endauth

<div class="overlay" id="divAddMedicines">
	<div class="wrapperImages">
		<h2 class="add-header">زیادکردن</h2><a class="close" href="#" id="closeButton">&times;</a>
		<div class="content">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<form class="formADDEdit" method="post" action="{{ route('all_supply.storeMedicines') }}" enctype="multipart/form-data">
							@csrf
							<div class="rowaddImages mb-3">
								<label	class="label">ناوی دەرمان</label>
								<div>
									<input type="text" name="medicine_name" class="form-control" required/>
								</div>
							</div>
							<div class="rowaddImages mb-3">
								<label class="label">ناوەڕۆکی دەرمانەکە</label>
								<div>
									<input type="text" name="medicine_contents" class="form-control" required/>
								</div>
							</div>
							<div class="row">
				           <label class="label">ئایدی ئاژەڵەکە</label>
				            <div class="col-sm-15">
				           <input type="number" name="animal_id" class="phone form-control" required/>
				           </div>
			               </div>
							<div class="rowaddImages mb-3">
								<label	class="label">نرخی دەرمانەکە</label>
								<div>
									<input type="text" name="address" class="form-control" required/>
								</div>
							</div>
                            <div class="rowaddImages mb-3">
								<label	class="label">وێنەی دەرمانەکە</label>
								<div>
									<input type="file" name="medicine_image" class="form-control" required/>
								</div>
							</div>
                            <div class="rowaddImages mb-3">
								<label	class="label">ناوی نۆرینگە</label>
								<div>
									<input type="text" name="clinic_name" class="form-control" required/>
								</div>
							</div>
							<div class="rowaddImages mb-3">
								<label	class="label">لۆکەیشنی نۆرینگە</label>
								<div>
									<input type="text" name="clinic_location" class="form-control" required/>
								</div>
							</div>
							<div class="text-center">
								<input class="buttonForm inputSubmitForm" type="submit" value="ناردن"/>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
