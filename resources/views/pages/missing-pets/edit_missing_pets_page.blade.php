<div class="overlay" id="divEdit/{{$row->id}}">
		<div class="wrapper">
			<h2>گۆڕین</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" method="post" action="{{ route('stolen_missing.update', $row->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">خەڵات</label>
				<div class="col-sm-10">
					<input type="text" name="reward" class="form-control" value="{{ $row->reward }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ئیمێڵ</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" value="{{ $row->email }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ژمارەی مۆبایل</label>
				<div class="col-sm-10">
					<input type="tel" name="phone_number" class="form-control" value="{{ $row->phone_number }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">بەرواری دیارنەمانی</label>
				<div class="col-sm-10">
				<input type="date" name="stolen_lost_date" class="form-control" value="{{ $row->stolen_lost_date }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">هۆکاری دیارنەمانی</label>
				<div class="col-sm-10">
				    <select name="pet_case" class="form-control">
						<option value="Stolen">دزراو</option>
						<option value="Missing">ونبووە</option>
					</select>
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">زانیاری زیادە</label>
				<br>
				<div class="col-sm-10">
				<input type="text" name="description" class="form-control" value="{{ $row->description }}" />
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">وێنەی</label>
				<div class="col-sm-10">
					<input type="file" name="picture" />
					<img src="{{ asset('picture/' . $row->picture) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_picture" value="{{ $row->picture }}" />
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
