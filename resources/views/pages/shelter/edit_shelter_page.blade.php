<div class="overlayShelter" id="divEdit/{{$row->id}}">
		<div class="wrapper">
			<h2 class="edit-header">گۆڕین</h2><a class="close" href="#" id="closeButtonEditMS/{{$row->id}}">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="shelter-card-body">
		<form class="formADDEdit" method="post" action="{{ route('shelter.update', $row->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')	
			<div class="mb-3">
				<label>ناو</label>
				<div>
					<input type="text" name="name" class="form-control" value="{{ $row->name }}" required/>
				</div>
			</div>
			<div class="mb-3">
				<label>ناونیشان</label>
				<div>
					<input type="text" name="address" class="form-control" value="{{ $row->address }}" required/>
				</div>
			</div>
			<div class="mb-3">
				<label>لۆکەیشن</label>
				<div>
					<input type="text" name="location" class="form-control" value="{{ $row->location }}" required/>
				</div>
			</div>
			<div class="mb-3">
				<label>زانیاری</label>
				<div>
					<input type="text" name="information" class="form-control" value="{{ $row->information }}" required/>
				</div>
			</div>
			<div class="mb-4">
				<label>ڤیدیۆ</label>
				<div class="image-edit">
					<input type="file" class="picture pic-edit" name="video"/>
					<p class="edit-p">: ڤیدیۆی پێشوو</p>
					<video autoplay loop muted class="video-thumbnail">
				<source src="{{ asset('video/' . $row->video) }}" type="video/mp4">
			    </video>
					<input type="hidden" name="hidden_video" value="{{ $row->video }}"/>
				</div>
			</div>
			<div class="mb-3">
				<label>ژمارەی مۆبایل</label>
				<div>
					<input type="tel" name="contact" class="form-control" value="{{ $row->contact }}" required/>
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