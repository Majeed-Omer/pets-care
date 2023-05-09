<div class="wrapperAnimalSupplies">
    <div class="containerSupplies">
      <div class="top parent-containerImageSupplies">
      <img class="imgSupplies" src="{{ $row->product_image }}" alt="پێداویستی پشیلە" ></div>
      <div class="bottom">
        <div class="left">
          <div class="detailsSupplies">
            <h1 class="h1Supplies">{{ $row->product_name }}</h1>
            <p class="pSupplies">{{ $row->product_price }}</p>
          </div>
          <div class="findSupplies"><i class="material-icons">location_on</i></div>
        </div>
        <div class="right">
          <div class="done"><i class="material-icons">location_on</i></div>
          <div class="detailsSupplies">
            <a class="h1ClinicsSupplies" href="{{ $row->store_location }}"><h1>{{ $row->store_name }}</h1></a>
            <!-- <p>Added to your cart</p> -->
          </div>
          <div class="remove"><i class="material-icons">clear</i></div>
        </div>
      </div>
    </div>
    <div class="inside">
      <div class="icon"><i class="material-icons">info_outline</i></div>
      <div class="contents">
      <p class="contents">{{ $row->product_contents }}</p>
      </div>
    </div>
  </div>


