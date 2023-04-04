@extends('pages.home.home')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="box">
		<a class="button" href="#divOne">ئاژەڵەکەت زیادبکە</a>
	</div>
	<div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>تکایە فۆڕمەکە پڕبکەکەوە</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					
					<div class="card">
	<div class="card-header">Add Animal</div>
	<div class="card-body">
		<form method="post" action="{{ route('animals.store') }}" enctype="multipart/form-data">
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
				<input type="submit" value="ناردن" />
			</div>	
		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>
<br><br><br><br>
	<div class="card-body">
			
			@if(count($data) > 0)

				@foreach($data as $row)

					
		<div>
  <td><img src="{{ asset('images/' . $row->images) }}" width="75" /></td>			
  <td>{{ $row->name }}</td>
  <td>{{ $row->species }}</td>
  <td>{{ $row->birth_date }}</td>	
		</div>			
  

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">هیچ وێنەیەک نییە</td>
				</tr>
			@endif
		{!! $data->links() !!}
	</div>

@endsection
