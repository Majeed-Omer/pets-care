<link rel="stylesheet" href="css/navBar.css">
    <header class="header">
    <div class="logo"><a href="#" class="aNav"><img src="myImages/logo2.jpg" alt="Logo of pet care" class="circular-image"></a></div>
      <ul class="main-nav">
          <li><a class="aNav" href="/home">ماڵەوە</a></li>
          <li><a class="aNav" href="/نەخشە">نەخشە</a></li>
		  <li>
		  <div class="dropdown">
          <button class="dropbtn">شوێنەکان 
           <i class="fa fa-caret-down"></i>
            </button>
           <div class="dropdown-content">
            <a class="aNavContent" href="/pet_store">فرۆشگای ئاژەڵان</a>
            <a class="aNavContent" href="/pet_clinic">ڤێتەرنەکان</a>
            </div>
           </div> 
		  </li> 
		  <li><a class="aNav" href="/all_supply">پێداویستی ئاژەڵان</a></li>
          <li><a class="aNav" href="/دەربارەی-ئێمە">دەربارەی ئێمە</a></li>
		  <li><a class="aNav" href="/login"><i class="fa-regular fa-circle-user" style="margin-right: 7px"></i>خۆت تۆماربکە</a></li>
      </ul>
	</header>
    
    <style>


    /* header */
@media (min-width: 769px) {
	.header,
	.main-nav {
		display: flex;
	}
	.header {
		flex-direction: column;
		align-items: center;
    	.header{
		width: 80%;
		margin: 0 auto;
		max-width: 1150px;
	}
	}

}

@media (min-width: 1025px) {
	.header {
		flex-direction: row;
		justify-content: space-between;
	}

}
</style>