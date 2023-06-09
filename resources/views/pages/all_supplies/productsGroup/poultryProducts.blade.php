<div class="wrapperAnimalSupplies">
    <div class="containerSupplies">
      <div class="top parent-containerImageSupplies">
      <img class="imgSupplies" src="{{ $row->image }}" alt="پێداویستی پەلەوەر" ></div>
      <div class="bottom">
        <div class="left">
          <div class="detailsSupplies">
          <p class="pNameSupplies">{{ $row->name }}</p>
            <p class="pSupplies">{{ $row->price }}</p>
          </div>
          <div class="findSupplies"><i class="material-icons">location_on</i></div>
        </div>
        <div class="right">
          <div class="done"><i class="material-icons">location_on</i></div>
          <div class="detailsSupplies">
            <a class="pPlaceSupplies" href="{{ $row->store_location }}"><p class="pNamePlaces">{{ $row->store_name }}</p></a>
            <!-- <p>Added to your cart</p> -->
          </div>
          <div class="remove"><i class="material-icons">clear</i></div>
        </div>
      </div>
    </div>
    <div class="inside">
      <div class="icon"><i class="material-icons">info_outline</i></div>
      <div class="contents">
      <p class="contents">{{ $row->contents }}</p>
      </div>
    </div>
  </div>


