<section class="map">
  <div class="map__content">
      <div class="map__address-title">Адрес:</div>
      <div class="map__address">{{ $address }}</div>

      <div class="map__hours-title">Часы работы:</div>
      <div class="map__hours">{!! wpautop( $work_time ) !!}</div>
  </div>
  {{-- <div class="map__container container"></div> --}}
  <div id="map" class="map__object">

</section>
