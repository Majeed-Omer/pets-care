<!DOCTYPE html>
<html>
<head>
	<title>لاپەڕەی ئەدمین</title>
	<link rel="stylesheet" href="css/admin.css">
    @include('header')
</head>
<body>
    <br>
	<h1>لاپەڕەی ئەدمین</h1>
    <br>
    <label class="custom-select" for="styledSelect1"><select id="styledSelect1" name="options">
    <option class="options" value="species">
      وێنەی ئاژەڵان
    </option>


    <option class="options" value="missing_stolen">
      وێنەی ئاژەڵی بزربوو
    </option>
  </select></label>
    <div id="species">
    <div class="grid-containerAdmin">
    @foreach($species as $specie)
    <div class="item">
        <img src="{{ asset('images/' . $specie->images) }}" class="img-responsive">
        <p><span>ناو: </span> {{ $specie->pet_name }}</p>
		<p> <span>جۆری: </span>{{ $specie->species_name }}</p>
      	<p><span>بەرواری لەدایکبوونی: </span> {{ $specie->birth_date }}</p>
		  <p><span>بارودۆخی: </span> {{ $specie->state }}</p>
		<p><span> وردەکاری زیاتر: </span>{{ $specie->notes }}</p>
        <form method="POST" action="{{ route('approve', $specie->id) }}" class="formAccept">
            @csrf
            <input type="hidden" name="species_id" value="{{ $specie->id }}">
            <button type="submit" name="approval" value="1" class="buttonRA">قبووڵکردن</button>
        </form>
        <form method="POST" action="{{ route('reject', $specie->id) }}" class="formReject">
            @csrf
            <input type="hidden" name="species_id" value="{{ $specie->id }}">
            <button type="submit" name="approval" value="2" class="buttonRA" style="--color:#f3738a">ڕەتکردنەوە</button>
        </form>
    </div>
@endforeach
    </div>    

</div>


<div id="missing_stolen">
<div class="grid-containerAdmin">    
@foreach($stolen_missings as $stolen_missing)
    <div class="item">
        <img src="{{ asset('stolen_missing_image/' . $stolen_missing->stolen_missing_image) }}" class="img-responsive">
        <p style="text-align: right"><span> خەڵات :</span> {{ $stolen_missing->reward }}</p>
		<p style="text-align: right">{{ $stolen_missing->email }} <span> : ئیمەیڵ</span></p>
      	<p style="text-align: right"><span> ژمارەی مۆبایل :</span> {{ $stolen_missing->phone_number }}</p>
		<p style="text-align: right"><span> بەرواری دیارنەمانی :</span> {{ $stolen_missing->stolen_lost_date }}</p>
		<p style="text-align: right"><span>هۆکاری دیارنەمانی : </span>{{ $stolen_missing->pet_case }}</p>
		<p style="text-align: right"><span> وردەکاری زیاتر : </span>{{ $stolen_missing->description }}</p>
        <form method="POST" action="{{ route('approve1', $stolen_missing->id) }}" class="formAccept">
            @csrf
            <input type="hidden" name="stolen_missing_id" value="{{ $stolen_missing->id }}">
            <button type="submit" name="approval" value="1" class="buttonRA">قبووڵکردن</button>
        </form>
        <form method="POST" action="{{ route('reject1', $stolen_missing->id) }}" class="formReject">
            @csrf
            <input type="hidden" name="stolen_missing_id" value="{{ $stolen_missing->id }}">
            <button type="submit" name="approval" value="2" class="buttonRA" style="--color:#f3738a">ڕەتکردنەوە</button>
        </form>
    </div>
@endforeach
</div>
</div>
</body>
@include('footer') 
<script src="https://kit.fontawesome.com/217328fb47.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/admin.js"></script>
</html>
