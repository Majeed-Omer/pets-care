  @auth
  @if(auth()->user()->id == 1)
	<div class="boxrideView">
		<a class="buttonAddShelter" href="#divShelter" id="addShelterButton">پەناگەیەک زیادبکە</a>
	</div>
	@endif
@endauth
	<div class="overlayShelter" id="divShelter">
		<div class="wrapper">
			<h2 class="shelter-header">تۆمارکردنی زانیاری</h2><a class="close" href="#" id="closeButtonMS">&times;</a>
			<div class="content">
				<div class="container">
					<div class="card">
	<div class="shelter-card-body">
		<form class="formADDShelter" method="post" action="{{ route('shelter.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<label class="col-label-form">ناو</label>
				<div class="shelter-input-field">
					<input type="text" name="name" class="form-control input" required/>
				</div>
			</div>
			<div class="row">
				<label class="col-label-form">ناونیشان</label>
				<div class="shelter-input-field">
					<input type="text" name="address" class="form-control input" required/>
				</div>
			</div>
			<div class="row">
				<label class="col-label-form">لۆکەیشن</label>
				<div class="shelter-input-field">
				<input type="text" name="location" class="form-control input" required/>
				</div>
			</div>
			<div class="row">
				<label class="col-label-form">زانیاری</label>
				<div class="shelter-input-field">
				<textarea name="information" id="information" cols="30" rows="10" class="form-control input"></textarea>	
				</div>
			</div>
			<div class="row">
				<label class="col-sm-5 col-label-form">ڤیدیۆی پەناگە</label>
				<div class="shelter-input-field">
					<input type="file" name="video" class="video" required/>
				</div>
			</div>
			
			<div class="row">
				<label class="col-sm-6 col-label-form">ژمارەی مۆبایل</label>
				<div class="shelter-input-field">
				<input type="tel" name="contact" class="phone form-control input" required/>
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