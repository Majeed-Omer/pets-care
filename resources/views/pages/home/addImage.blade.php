@extends('pages.home.home')
@section('content')
<<<<<<< HEAD
<link rel="stylesheet" href="css/home/addImages.css">
<div class="boxImages">
		<a class="buttonAddImages" href="#divOne">ئاژەڵەکەت زیادبکە</a>
	</div>
	<div class="overlay" id="divOne">
		<div class="wrapperImages">
			<h2>زیادکردن</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					
					<div class="card">
	<div class="card-body">
		<form class="formADDEdit" method="post" action="{{ route('animal.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="rowaddImages mb-3">
				<label >ناوی ئاژەڵ</label>
				<div class="col-sm-10">
					<input class="inputImagesAdd" type="text" name="name" class="form-control" />
				</div>
			</div>
			<div class="rowaddImages mb-3">
				<label >جۆری ئاژەڵ</label>
				<div class="col-sm-10">
					<input class="inputImagesAdd" type="text" name="species" class="form-control" />
				</div>
			</div>
			<div class="rowaddImages mb-4">
				<label >بەرواری لەدایکبوونی</label>
				<div class="col-sm-10">
				<input type="date" name="birth_date" class="form-control" />
				</div>
			</div>
			<div class="rowaddImages mb-4">
				<label >وێنەی ئاژەڵەکە</label>
				<div class="col-sm-10">
					<input type="file" name="images" />
				</div>
			</div>
			<div class="rowaddImages mb-3">
				<label >زانیاری</label>
				<div class="col-sm-10">
					<input class="inputImagesAdd" type="text" name="notes" class="form-control" />
				</div>
			</div>
			<div class="text-center">
				<input class="buttonForm" type="submit" value="ناردن" />
			</div>	
		</form>
	</div>
=======

<div class="box">
		<a class="button" href="#divOne">ئاژەڵەکەت زیادبکە</a>
>>>>>>> f381b4370092837299a3695acf7e4eb8321f422c
</div>
<div class="overlay" id="divOne">
	<div class="wrapper">
		<h2>زیادکردن</h2><a class="close" href="#">&times;</a>
		<div class="content">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<form class="formADDEdit" method="post" action="{{ route('animal.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="row mb-3">
								<label class="col-sm-2 col-label-form">ناوی ئاژەڵ</label>
								<div class="col-sm-10">
									<input type="text" name="name" class="form-control" />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-label-form">جۆری ئاژەڵ</label>
								<div class="col-sm-10">
									<input type="text" name="species" class="form-control" />
								</div>
							</div>
							<div class="row mb-4">
								<label class="col-sm-2 col-label-form">بەرواری لەدایکبوونی</label>
								<div class="col-sm-10">
								<input type="date" name="birth_date" class="form-control" />
								</div>
							</div>
							<div class="row mb-4">
								<label class="col-sm-2 col-label-form">وێنەی ئاژەڵەکە</label>
								<div class="col-sm-10">
									<input type="file" name="images" />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-label-form">زانیاری</label>
								<div class="col-sm-10">
									<input type="text" name="notes" class="form-control" />
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
<br><br><br>

@if(count($data) > 0)
@foreach($data as $row)

<<<<<<< HEAD
				@foreach($data as $row)
				<div  class="columnImage">
					<img class="imganimal" src="{{ asset('images/' . $row->images) }}" width="150" height="120"/>
					  <div class="divAnimalText">
						<p class="pImage">{{ $row->name }}</p>
						<p class="pImage">{{ $row->species }}</p>
                        <p class="pImage">{{ $row->birth_date }}</p>
					  </div>
	                      
						  <div class="edit-Delete-button">
						  <form action="{{ route('animal.destroy',$row->id) }}" method="POST">
						  <a class="button-Edit" href="#divEdit">گۆڕین</a>
		                 @csrf
		                @method('DELETE')
		                <button type="submit" class="button-Delete">سڕینەوە</button>
	                     </form>
							
						  </div>
						  <div class="overlay" id="divEdit">
		<div class="wrapperImages">
			<h2>گۆڕین</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<br><br><br><br>
	<div class="card-body">
		<form class="formADDEdit" method="post" action="{{ route('animal.update', $row->id) }}" enctype="multipart/form-data">
			<br><br><br><br><br><br><br><br><br><br>
			@csrf
			@method('PUT')
			<div class="rowaddImages mb-3">
				<label>ناوی ئاژەڵ</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{ $row->name }}" />
				</div>
			</div>
			<div class="rowaddImages mb-3">
				<label >جۆری ئاژەڵ</label>
				<div class="col-sm-10">
					<input type="text" name="species" class="form-control" value="{{ $row->species }}" />
				</div>
			</div>
			<div class="rowaddImages mb-4">
				<label>لەدایکبوونی</label>
				<div class="col-sm-10">
					<br><br><br><br><br><br><br>
				<input type="date" name="birth_date" class="form-control" value="{{ $row->birth_date }}" />
				</div>
			</div>
			<br><br><br><br><br><br><br>
			<div class="rowaddImages mb-4">
				<label>وێنەی</label>
				<br><br><br><br><br><br><br>
				<div class="col-sm-10">
					<input type="file" name="images" />
					<br /><br><br><br><br>
					<img src="{{ asset('images/' . $row->images) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_images" value="{{ $row->images }}" />
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br>
			<div class="rowaddImages mb-4">
				<label>زانیاری</label>
				<br>
				<div class="col-sm-10">
				<input type="text" name="notes" class="form-control" value="{{ $row->notes }}" />
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
                </div>				
=======
<div  class="columnImage">
	<img class="imganimal" src="{{ asset('images/' . $row->images) }}" width="150" height="120"/>
	<div style="line-height: 0.8; text-align: right">
		<p class="pImage">{{ $row->name }} :ناو</p>
		<p class="pImage">{{ $row->species }} :جۆر</p>
      	<p class="pImage">{{ $row->birth_date }} :لەدایکبوونی</p>
	</div>
	<div class="edit-Delete-button">
		<form action="{{ route('animal.destroy',$row->id) }}" method="POST">
			<a class="button-Edit" href="#divEdit">گۆڕین</a>
	    	@csrf
	        @method('DELETE')
	        <button type="submit" class="button-Delete">سڕینەوە</button>
	    </form>					
	</div>
	<div class="overlay" id="divEdit">
		<div class="wrapper">
			<h2>گۆڕین</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<div class="card">
						<br><br><br><br>
						<div class="card-body">
							<form class="formADDEdit" method="post" action="{{ route('animal.update', $row->id) }}" enctype="multipart/form-data">
								<br><br><br><br><br><br><br><br><br><br>
								@csrf
								@method('PUT')
								<div class="row mb-3">
									<label class="col-sm-2 col-label-form">ناوی ئاژەڵ</label>
									<div class="col-sm-10">
										<input type="text" name="name" class="form-control" value="{{ $row->name }}" />
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-sm-2 col-label-form">جۆری ئاژەڵ</label>
									<div class="col-sm-10">
										<input type="text" name="species" class="form-control" value="{{ $row->species }}" />
									</div>
								</div>
								<div class="row mb-4">
									<label class="col-sm-2 col-label-form">لەدایکبوونی</label>
									<div class="col-sm-10">
										<br><br><br><br><br><br><br>
									<input type="date" name="birth_date" class="form-control" value="{{ $row->birth_date }}" />
									</div>
								</div>
								<br><br><br><br><br><br><br>
								<div class="row mb-4">
									<label class="col-sm-2 col-label-form">وێنەی</label>
									<br><br><br><br><br><br><br>
									<div class="col-sm-10">
										<input type="file" name="images" />
										<br /><br><br><br><br>
										<img src="{{ asset('images/' . $row->images) }}" width="100" class="img-thumbnail" />
										<input type="hidden" name="hidden_images" value="{{ $row->images }}" />
									</div>
								</div>
								<br><br><br><br><br><br><br><br><br>
								<div class="row mb-4">
									<label class="col-sm-2 col-label-form">زانیاری</label>
									<br>
									<div class="col-sm-10">
									<input type="text" name="notes" class="form-control" value="{{ $row->notes }}" />
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
</div>					
>>>>>>> f381b4370092837299a3695acf7e4eb8321f422c
       
@endforeach
@else

<tr>
	<td colspan="5" class="text-center">هیچ وێنەیەک نییە</td>
</tr>

@endif
{!! $data->links() !!}
@endsection

