<link rel="stylesheet" href="css/navBar.css">
    <header class="header">
    <div class="logo"><a href="#" class="aNav"><img src="images/logo.png" alt="Logo of pet care" width="80px" height="80px"></a></div>
      <ul class="main-nav">
          <li><a class="aNav" href="/home">ماڵەوە</a></li>
          <li><a class="aNav" href="/نەخشە">نەخشە</a></li>
          <li><a class="aNav" href="/ڤێتەرنەکان">ڤێتەرنەکان</a></li>
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