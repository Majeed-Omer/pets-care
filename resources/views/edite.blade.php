@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Edit Animal</div>
	<div class="card-body">
		<form method="post" action="{{ route('animals.update', $animal->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Animal Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{ $animal->name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Animal Species</label>
				<div class="col-sm-10">
					<input type="text" name="species" class="form-control" value="{{ $animal->species }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Animal Date</label>
				<div class="col-sm-10">
				<input type="date" name="birth_date" class="form-control" value="{{ $animal->birth_date }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Animal Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
					<br />
					<img src="{{ asset('images/' . $animal->images) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_images" value="{{ $animal->images }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Animal Note</label>
				<div class="col-sm-10">
				<input type="text" name="notes" class="form-control" value="{{ $animal->notes }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $animal->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>


@endsection('content')