<div class="overlayMissing" id="divShow/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2 class="show-header">پیشاندان</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">
			

			<div>
				<div class="con-img">
					<img src="{{ asset('picture/' . $row->picture) }}" class="imgShowMissing"/>
					<input type="hidden" name="hidden_picture" value="{{ $row->picture }}" />
				</div>
			</div>
			
		<p class="show-p"><span class="show-sp"> خەڵات :</span> ${{ $row->reward }}</p>
		<p class="show-p">{{ $row->email }} <span class="show-sp"> : ئیمەیڵ</span></p>
      	<p class="show-p"><span class="show-sp"> ژمارەی مۆبایل :</span> {{ $row->phone_number }}</p>
		<p class="show-p"><span class="show-sp"> بەرواری دیارنەمانی :</span> {{ $row->stolen_lost_date }}</p>
		<p class="show-p"><span class="show-sp">هۆکاری دیارنەمانی : </span>{{ $row->pet_case }}</p>
		<p class="show-p"><span class="show-sp"> وردەکاری زیاتر : </span>{{ $row->description }}</p>

		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>
