<div class="wrapperAnimalSupplies">
    <div class="containerSupplies">
      <div class="top parent-containerImageSupplies">
      <img class="imgSupplies" src="{{ $row->medicine_image }}" alt="poultry medicine"></div>
      <div class="bottom">
        <div class="left">
          <div class="detailsSupplies">
          <p class="pNameSupplies">{{ $row->medicine_name }}</p>
            <p class="pSupplies">{{ $row->medicine_price }}</p>
          </div>
          <div class="findSupplies"><i class="material-icons">location_on</i></div>
        </div>
        <div class="right">
          <div class="done"><i class="material-icons">location_on</i></div>
          <div class="detailsSupplies">
            <a class="pPlaceSupplies" href="{{ $row->clinic_location }}"><p class="pNamePlaces">{{ $row->clinic_name }}</p></a>
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