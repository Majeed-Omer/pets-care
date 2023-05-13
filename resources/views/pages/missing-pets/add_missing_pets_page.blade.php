<div class="boxrideView">
		<a class="buttonAddMissing" href="#divOne">ئاژەڵەکەت زیادبکە</a>
	</div>
	<div class="overlayMissing" id="divOne">
		<div class="wrapper">
			<h2 class="missing-header">تۆمارکردنی زانیاری</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<div class="card">
	<div class="missings-card-body">
		<form class="formADDEdit" method="post" action="{{ route('stolen_missing.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<label class="col-sm-2 col-label-form">خەڵات</label>
				<div class="col-sm-10">
					<input type="text" name="reward" class="form-control" required/>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-2 col-label-form">ئیمەیڵ</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" required/>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-2 col-label-form">ژمارەی مۆبایل</label>
				<div class="col-sm-10">
				<input type="tel" name="phone_number" class="phone form-control" required/>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-2 col-label-form">بەرواری دیارنەمانی</label>
				<div class="col-sm-10">
				<input type="date" name="stolen_lost_date" class="calender form-control" required/>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-2 col-label-form">هۆکاری دیارنەمانی</label>
				<div class="col-sm-10">
					<select name="pet_case" class="missing-reason form-control">
						<option value="دزراو">دزراو</option>
						<option value="ونبووە">ونبووە</option>
					</select>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-2 col-label-form">زانیاری زیادە</label>
				<div class="col-sm-10">
				<input type="text" name="description" class="form-control" required/>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-2 col-label-form">وێنەی ئاژەڵەکە</label>
				<div class="col-sm-10">
					<input type="file" name="picture" class="picture" required/>
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