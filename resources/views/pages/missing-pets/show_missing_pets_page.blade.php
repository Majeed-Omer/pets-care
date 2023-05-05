<div class="overlayMissing" id="divShow/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2>پیشاندان</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">
			

			<div class="row mb-4">
				<div class="col-sm-10">
					<img src="{{ asset('picture/' . $row->picture) }}" width="100%" class="imgShowMissing"/>
					<input type="hidden" name="hidden_picture" value="{{ $row->picture }}" />
				</div>
			</div>
			
		<p style="text-align: right"><span> خەڵات</span> {{ $row->reward }}</p>
		<p style="text-align: right">{{ $row->email }} <span> ئیمێڵ</span></p>
      	<p style="text-align: right"><span> ژمارەی مۆبایل</span> {{ $row->phone_number }}</p>
		<p style="text-align: right"><span> بەرواری دیارنەمانی</span> {{ $row->stolen_lost_date }}</p>
		<p style="text-align: right"><span>هۆکاری دیارنەمانی </span>{{ $row->pet_case }}</p>
		<p style="text-align: right"><span> وردەکاری زیاتر</span>{{ $row->description }}</p>

		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>
