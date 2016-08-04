<div class="card has-cover event-card">
  <img class="img-responsive card-cover" src="http://placehold.it/1280x720" alt=""/>
  <div class="card-content">
    <div class="card-body">
      <h2 class="card-title"><a href="{{ url('events/' . $event->id) }}"><?=$event->title?></a></h2>
      <!-- <h4 class="card-subtitle">subtitle</h4> -->
      <h4 class="card-date"><?=date('l, j F Y', strtotime($event->date_start))?></h4>
      <p class="card-description">
        @if(strlen($event->description) > 200)
          <?=substr($event->description, 0, 200)?>... <a href="{{ url('events/' . $event->id) }}">More</a>
        @else
          <?=$event->description?>
        @endif
      </p>
      <p class="card-details">
        <?=$event->time_start?> - <?=$event->time_end?>, <?=$event->price?>, <?=$event->location_name?>
      </p>
    </div>
    <hr>
    <div class="card-footer">
      @if($event->getOriginal('price'))
        <a class="card-action" href="<?=$event->tickets_link?>">Tickets&nbsp;<i class="fa fa-ticket" aria-hidden="true"></i></a>
      @endif
      <a class="card-action" href="#">Directions&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i></a>
    </div>
  </div>
</div>