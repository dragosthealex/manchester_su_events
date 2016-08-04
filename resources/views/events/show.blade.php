@extends('layouts.app')

@section('title') <?=$event->title?> :: @parent @endsection

@section('styles')
<style type="text/css">
.event-header {
  text-align: center;
}
.event-header h2 {
  font-size: 80px;
}
.event-cover {
  background-size: cover;
  background-origin: 0,0;
  background-position: center;
  background-repeat: no-repeat;
  background-image: url('<?=$event->cover?>');
  width: 100%;
  display: block;
  min-height: 400px;
}
#the-map {
  height: 500px;
  margin-top: 30px;
}

@media(max-width: 768px) {
  #the-map {
    height: 300px;
  }
  .event-subtitle {
    margin-top: 30px;
  }
}
</style>
@endsection

@section('content')
<section id="event-section" class="content-section">
  <div class="container">
    <div class="row">
      <div class="page-header event-header">
        <h2><?=$event->title?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="event-cover"></div>
      </div>
      <div class="col-md-4">
        <h3 class="event-subtitle"><?=$event->subtitle?></h3>
        <h4 class="event-date"><a><?=date('l, j F Y', strtotime($event->date_start))?></a></h4>
        <p class="event-description">
          <?=$event->description?>
        </p>
        <p class="event-details">
          <?=$event->time_start?> - <?=$event->time_end?>, <?=$event->price?>, <?=$event->location_name?>
        </p>
      </div>
    </div>
  </div>
</section>
<section id="map-section">
  <div class="container-fluid">
    <div class="row">
      <div class="span-12">
        <div id="the-map"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
function initMap() {
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    'address': "<?=trim(preg_replace('/\s+/', ' ', $event->location_address))?>"
  }, function(results, status) {
    var myOptions = {
          zoom: 8,
          center: {lat: '53.466708', lng:'-2.234449'},
          mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    if (status == google.maps.GeocoderStatus.OK) {
      myOptions = {
          zoom: 8,
          center: results[0].geometry.location,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      }
    }
    // Create map
    map = new google.maps.Map(document.getElementById("the-map"), myOptions);

    // Create marker
    var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location
    });
  });
}
initMap();
</script>
@endsection