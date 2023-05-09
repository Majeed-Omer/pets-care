<!-- <a href="#divShowMedicine/{{$row->id}}"> -->
<div class="wrapperAnimalSupplies">
    <div class="containerSupplies">
      <div class="top parent-containerImageSupplies">
      <img class="imgSupplies" src="{{ $row->medicine_image }}" alt="cat medicine"></div>
      <div class="bottom">
        <div class="left">
          <div class="detailsSupplies">
            <h1 class="h1Supplies">{{ $row->medicine_name }}</h1>
            <p class="pSupplies">{{ $row->medicine_price }}</p>
          </div>
          <div class="findSupplies"><i class="material-icons">location_on</i></div>
        </div>
        <div class="right">
          <div class="done"><i class="material-icons">location_on</i></div>
          <div class="detailsSupplies">
            <a class="h1ClinicsSupplies" href="{{ $row->clinic_location }}"><h1>{{ $row->clinic_name }}</h1></a>
            <!-- <p>Added to your cart</p> -->
          </div>
          <div class="remove"><i class="material-icons">clear</i></div>
        </div>
      </div>
    </div>
    <div class="inside">
      <div class="icon"><i class="material-icons">info_outline</i></div>
      <div class="contents">
      <p class="contents">{{ $row->medicine_contents }}</p>
      </div>
    </div>
  </div>
	<!-- <div class="grid-item">
    <img src="myImages/cat_star.png" alt="cat food" class="imgSupplies">
    <h3 class="stuffName">{{ $row->medicine_name }}</h3>
    <p class="priceP">{{ $row->medicine_price }}</p>
	</div> -->
<!-- </a> -->
    
<!-- <div class="overlay" id="divShowMedicine/{{$row->id}}">
		<div class="wrapperShowImage">
			<h2>پیشاندان</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
				<div class="card">
	<div class="card-body">
		<form class="formADDEdit" enctype="multipart/form-data">

			<div>
				<div class="col-sm-15">
					<img src="myImages/cat_star.png" width="100%" class="imgShowAnimals"/>
				</div>
			</div>
      <h3 class="textStuff">{{ $row->medicine_name }}</h3>
      <p class="textStuff">{{ $row->medicine_contents }}</p>
	  <p class="textStuff">دەستدەکەوێت لە <a class="aStuffAnimalAll" href="{{ $row->clinic_location }}"><b>{{ $row->clinic_name }}</b></a></p>
		</form>
	</div>
</div>
				</div>
			</div>
			
		</div>
	</div> -->
