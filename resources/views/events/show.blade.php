@extends('layouts.app')

@section('title') <?=$event->title?> :: @parent @endsection

@section('styles')
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css') }}">
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
.event-photos {
  margin-top: 30px;
}
.event-photos a {
  display: inline-block;
  padding: 0;
  margin-left: 15px;
}
.event-photos a:first-child {
  margin-left: 0;
}
.event-photos a img {
  width: 100%;
}
.event-details {
  margin-bottom: 15px;
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
      @if($event->getOriginal('cover'))
      <div class="col-md-8">
        <div class="event-cover"></div>
      </div>
      <div class="col-md-4">
      @else
      <div class="col-sm-12">
      @endif
        <h3 class="event-subtitle"><?=$event->subtitle?></h3>
        <h4 class="event-date"><a><?=date('l, j F Y', strtotime($event->date_start))?></a></h4>
        <p class="event-description">
          <?=$event->description?>
        </p>
        <p class="event-details">
          <?=$event->time_start?> - <?=$event->time_end?>, <?=$event->price?>, <?=$event->location_name?>
        </p>
        <p>
          @if($event->getOriginal('price'))
          <a target="_blank" class="btn btn-primary" href="<?=$event->tickets_link?>">Tickets&nbsp;<i class="fa fa-ticket" aria-hidden="true"></i></a>
          @endif
          <a target="_blank" class="btn btn-primary" href="http://maps.google.com/?q=<?=trim(preg_replace('/\s+/', ' ', $event->location_address))?>">Directions&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i></a>
        </p>
      </div>
    </div>
    @if(count($event->photos))
    <div class="row">
      <div class="col-sm-12 event-photos">
        @foreach($event->photos as $photo)
          <a class="col-md-3 col-sm-4 col-xs-6" href="{{ asset('img/events/'.$event->id.'/'.$photo->filename) }}" data-gallery>
            <img class="img-responsive" src="{{ asset('img/events/'.$event->id.'/'.$photo->filename) }}">
          </a>
        @endforeach
      </div>
    </div>
    @endif
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
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
  function initMap() {
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({
      'address': "<?=trim(preg_replace('/\s+/', ' ', $event->location_address?$event->location_address:$event->location_name.' Manchester, UK'))?>"
    }, function(results, status) {

      var location_coords = {lat: '53.4651813', lng:'-2.2325923'};

      if (status == google.maps.GeocoderStatus.OK) {
        location_coords = results[0].geometry.location;
      }

      myOptions = {
          zoom: 8,
          center: location_coords,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      // Create map
      map = new google.maps.Map(document.getElementById("the-map"), myOptions);

      // Create marker
      var marker = new google.maps.Marker({
          map: map,
          position: location_coords
      });
    });
  }
  initMap();
});
</script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="{{ asset('lib/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js') }}"></script>
@endsection