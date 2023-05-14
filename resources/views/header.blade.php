<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/header.css">

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
	<div class="container-fluid nav-left">
	  <a class="navbar-brand" href="#"><img src="myImages/logo2-removebg.png" alt="Logo of pet care" width="80px" height="80px"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	</div>
	<div class="list collapse navbar-collapse" id="navbarScroll">
	  <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 250px;">
	  @auth
  @if(auth()->user()->id == 1)
    <li class="nav-item">
      <a class="nav-link text-style" href="/admin">ئەدمین</a>
    </li>
  @endif
@endauth
		<li class="nav-item">
		  <a class="nav-link text-style active" aria-current="page" href="/home">ماڵەوە</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link text-style" href="/map">نەخشە</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link text-style" href="/all_supply">پێداویستی ئاژەڵان</a>
		</li>
		<li class="nav-item dropdown">
	        <a class="nav-link text-style dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	          شوێنەکان
	        </a>
	        <ul class="dropdown-menu">
	          <li><a class="dropdown-item text-style" href="/pet_store">فرۆشگای ئاژەڵان</a></li>
	          <li><a class="dropdown-item text-style" href="/pet_clinic">کلینیکی ئاژەڵان</a></li>
			  <li><a class="dropdown-item text-style" href="/shelter">پەناگەی ئاژەڵان</a></li>
	        </ul>
	    </li>
		<li class="nav-item">
		  <a class="nav-link text-style" href="/about-us">دەربارەی ئێمە</a>
		</li>
		<li class="nav-item">
			@if (Auth::check())
          <a class="nav-link text-style login" href="/logout"><i class="fa-regular fa-circle-user iLogin"></i>چوونە دەرەوە</a>
          @else
         <a class="nav-link text-style login" href="/login"><i class="fa-regular fa-circle-user iLogin"></i>خۆت تۆماربکە</a>
          @endif
		</li>
	  </ul>
	</div>
</nav>

<!-- Bootstrap JavaScript -->
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>