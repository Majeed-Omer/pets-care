<link rel="stylesheet" href="css/missing_pets.css">


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
	  

<div class="rowMissing">
@if(count($data) > 0)

@foreach($data as $row) 
  <div class="columnMissing">
    <div>
		<img style="width:100%" src="{{ asset('picture/' . $row->picture) }}" class="imgSlideShow"></div> 
     <pre class="text">
	         {{ $row->reward }} :خەڵات
		  {{ $row->email }} :ئیمێڵ
		  {{ $row->phone_number }} :ژمارەی مۆبایل
		  {{ $row->stolen_lost_date }} :بەرواری دیارنەمانی  
		  {{ $row->description }} :زانیاری زیادە
		  {{ $row->pet_case }} :هۆکاری دیارنەمانی 
     </pre>
		<form action="{{ route('stolen_missing.destroy',$row->id) }}" method="POST">
		<!-- <a class="button-Edit-Missing">گۆڕین</a> -->
		<table class='edit-Delete-button-Missing'>
        <tr>
          <td><a type= "submit" class="button-Edit-Missing"  href="#divEdit">گۆڕین</a></td>
          <td>@csrf
		 @method('DELETE')
		<button type="submit" class="button-Delete-Missing">سڕینەوە</button></td>
         </tr>
        </table>
	     </form>
		 
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
  @endforeach

@else
	<tr>
		<td colspan="5" class="text-center">هیچ وێنەیەک نییە</td>
	</tr>
@endif
{!! $data->links() !!}	
</div>



<script src="js/missing_pets.js"></script>
<script src="js/addMissingImage.js"></script>
