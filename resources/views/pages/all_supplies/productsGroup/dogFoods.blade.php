<a class="aStuff" href="#divShowFood/{{$row->id}}">
  <div class="grid-item">
    <img src="myImages/dog_food.png" alt="Product 1" class="imgSupplies">
    <h3 class="stuffName">{{ $row->product_name }}</h3>
    <p class="priceP">{{ $row->product_price }}</p>
	</div>
</a>	

<div class="overlay" id="divShowFood/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2>پیشاندان</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">

			<div>
				<div class="col-sm-15">
					<img src="myImages/dog_food.png" width="100%" class="imgShowAnimals"/>
				</div>
			</div>
      <h3 class="textStuff">{{ $row->product_name }}</h3>
      <p class="textStuff">{{ $row->product_contents }}</p>
	  <p class="textStuff">دەستدەکەوێت لە <a class="aStuffAnimalAll" href="{{ $row->store_location }}"><b>{{ $row->store_name }}</b></a></p>
		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div>