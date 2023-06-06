<div class="overlayMissing" id="divShow/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2 class="show-header">پیشاندان</h2><a class="close" href="#" id="closeShowMSImage/{{$row->id}}">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="missings-card-body">
		<form class="formADDEdit" enctype="multipart/form-data">
			

			<div>
				<div class="con-img">
					<img src="{{ asset('stolen_missing_image/' . $row->stolen_missing_image) }}" class="imgShowMissing"/>
					<input type="hidden" name="hidden_stolen_missing_image" value="{{ $row->stolen_missing_image }}" />
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

	<script>
	document.getElementById("ShowMSButton/{{$row->id}}").addEventListener("click", function(event) {
    document.getElementById("divShow/{{$row->id}}").style.display = "block";
  });
  
  document.getElementById("closeShowMSImage/{{$row->id}}").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("divShow/{{$row->id}}").style.display = "none";
  window.history.pushState({}, '', '/');
  });
</script>	