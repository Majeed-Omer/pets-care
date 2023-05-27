@auth
  @if(auth()->user()->id == 1)
<div class="boxImages">
	<a class="buttonAddClinic" href="#divAddPet_clinic" id="addImageButton">نۆرینگە زیادبکە</a>
</div>
@endif
@endauth

<div class="overlay" id="divAddPet_clinic">
	<div class="wrapperImages">
		<h2 class="add-header">زیادکردن</h2><a class="close" href="#" id="closeButton">&times;</a>
		<div class="content">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<form class="formADDEdit" method="post" action="{{ route('pet_clinic.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="rowaddImages mb-3">
								<label	class="label">ناوی کلینیک</label>
								<div>
									<input type="text" name="name" class="form-control" required/>
								</div>
							</div>
							<div class="rowaddImages mb-3">
								<label class="label">ئیمێڵی کلینیک</label>
								<div>
									<input type="text" name="email" class="form-control" required/>
								</div>
							</div>
							<div class="row">
				           <label class="label">ژمارەی مۆبایل</label>
				            <div class="col-sm-15">
				           <input type="tel" name="phone_number" class="phone form-control" required/>
				           </div>
			               </div>
							<div class="rowaddImages mb-3">
								<label	class="label">ناونیشان</label>
								<div>
									<input type="text" name="address" class="form-control" required/>
								</div>
							</div>
                            <div class="rowaddImages mb-3">
								<label	class="label">لۆکەیشن</label>
								<div>
									<input type="text" name="location" class="form-control" required/>
								</div>
							</div>
                            <div class="rowaddImages mb-3">
								<label	class="label">ناوی پزیشک</label>
								<div>
									<input type="text" name="veterinarian" class="form-control" required/>
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
