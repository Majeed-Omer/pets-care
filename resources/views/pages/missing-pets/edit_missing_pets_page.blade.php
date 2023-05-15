<div class="overlayMissing" id="divEdit/{{$row->id}}">
		<div class="wrapper">
			<h2 class="edit-header">گۆڕین</h2><a class="close" href="#" id="closeButtonEditMS/{{$row->id}}">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="missings-card-body">
		<form class="formADDEdit" method="post" action="{{ route('stolen_missing.update', $row->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')	
			<div class="mb-3">
				<label>خەڵات</label>
				<div>
					<input type="text" name="reward" class="form-control" value="{{ $row->reward }}" required/>
				</div>
			</div>
			<div class="mb-3">
				<label>ئیمێڵ</label>
				<div>
					<input type="text" name="email" class="form-control" value="{{ $row->email }}" required/>
				</div>
			</div>
			<div class="mb-3">
				<label>ژمارەی مۆبایل</label>
				<div>
					<input type="tel" name="phone_number" class="form-control" value="{{ $row->phone_number }}" required/>
				</div>
			</div>
			<div class="mb-4">
				<label>بەرواری دیارنەمانی</label>
				<div>
				<input type="date" name="stolen_lost_date" class="form-control" value="{{ $row->stolen_lost_date }}" required/>
				</div>
			</div>
			<div class="mb-4">
				<label>هۆکاری دیارنەمانی</label>
				<div class="edit-selector">
				    <select name="pet_case" class="state form-control">
						<option class="state" value="دزراو">دزراو</option>
						<option class="state" value="ونبووە">ونبووە</option>
					</select>
				</div>
			</div>

			<div class="mb-4">
				<label>زانیاری زیادە</label>
				<div>
				<input type="text" name="description" class="extra form-control" value="{{ $row->description }}" required/>
				</div>
			</div>

			<div class="mb-4">
				<label>وێنەی</label>
				<div class="image-edit">
					<input type="file" class="picture pic-edit" name="picture"/>
					<p class="edit-p">: وێنەی پێشوو</p>
					<img src="{{ asset('picture/' . $row->picture) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_picture" value="{{ $row->picture }}"/>
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
		document.getElementById("EditMSButton/{{$row->id}}").addEventListener("click", function(event) {
    document.getElementById("divEdit/{{$row->id}}").style.display = "block";
  });
  
  document.getElementById("closeButtonEditMS/{{$row->id}}").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("divEdit/{{$row->id}}").style.display = "none";
  window.history.pushState({}, '', '/');
  });
	</script>