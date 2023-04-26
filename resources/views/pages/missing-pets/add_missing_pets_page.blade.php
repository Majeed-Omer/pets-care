<div class="boxrideView">
		<a class="buttonAddMissing" href="#divOne">ئاژەڵەکەت زیادبکە</a>
	</div>
	<div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>زیادکردن</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					
					<div class="card">
	<div class="card-body">
		<form class="formADDEdit" method="post" action="{{ route('stolen_missing.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">خەڵات</label>
				<div class="col-sm-10">
					<input type="text" name="reward" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ئیمێڵ</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">ژمارەی مۆبایل</label>
				<div class="col-sm-10">
				<input type="tel" name="phone_number" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">بەرواری دیارنەمانی</label>
				<div class="col-sm-10">
				<input type="date" name="stolen_lost_date" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">هۆکاری دیارنەمانی</label>
				<div class="col-sm-10">
					<select name="pet_case" class="form-control">
						<option value="دزراو">دزراو</option>
						<option value="ونبووە">ونبووە</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">زانیاری زیادە</label>
				<div class="col-sm-10">
				<input type="text" name="description" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">وێنەی ئاژەڵەکە</label>
				<div class="col-sm-10">
					<input type="file" name="picture" />
				</div>
			</div>
			<div class="text-center">
				<input class="buttonForm" type="submit" value="ناردن" />
			</div>	
		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>