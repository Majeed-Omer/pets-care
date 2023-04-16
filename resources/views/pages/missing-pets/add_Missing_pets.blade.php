<link rel="stylesheet" href="css/missing_pets.css">

<style>
	.cardAddImages {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
  padding: 10px;
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  max-width: 300px;
}

.cardAddImages {
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
}


.card-buttons {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

.card-buttons button {
  font-size: 1em;
	padding: 5px 20px;
	color: #fff;
	text-decoration: none;
	cursor: pointer;
	transition: all 0.3s ease-out;
	background: red;
}

.card-buttons button:hover {
  background-color: #333;
}
.buttonEdit {
	font-size: 1em;
	padding: 8px 25px;
	color: #fff;
	text-decoration: none;
	cursor: pointer;
	transition: all 0.3s ease-out;
	background: #0171d3;
}
</style>

<div class="box">
		<a class="button" href="#divOne">ئاژەڵەکەت زیادبکە</a>
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
						<option value="Stolen">دزراو</option>
						<option value="Missing">ونبووە</option>
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

<br><br><br><br>
	  

@if(count($data) > 0)
<div class="rowMissing">

@foreach($data as $row) 

  <div class="columnMissing">
  <div class="cardAddImages">
  <img src="{{ asset('picture/' . $row->picture) }}" class="imgMissing">
  <div class="card-buttons edit-Delete-button-Missing">
  <form action="{{ route('stolen_missing.destroy',$row->id) }}" method="POST">
		 <!-- <a class="button-Edit-Missing">گۆڕین</a>
        <a type= "submit" class="button-Edit-Missing"  href="#divEdit">گۆڕین</a>
         
		<button type="submit" class="button-Delete-Missing">سڕینەوە</button> -->
		<a class="buttonEdit" href="#divEdit">Edit</a>
	@csrf
	@method('DELETE')
    <button type="submit" class="button1">Delete</button>
	</form> 
  </div>
</div>
</div>
@endforeach

</div>

  
  <div class="overlay" id="divEdit">
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

@else
	<tr>
		<td colspan="5" class="text-center">هیچ وێنەیەک نییە</td>
	</tr>
@endif
{!! $data->links() !!}	



<script src="js/missing_pets.js"></script>
<script src="js/addMissingImage.js"></script>
