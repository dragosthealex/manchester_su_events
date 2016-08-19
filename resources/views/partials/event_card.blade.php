<div class="card has-cover event-card">
  <!-- <img class="img-responsive card-cover" src="{{ asset('img/'.$event->cover) }}" alt=""/> -->
  <a href="{{ url('events/' . $event->slug) }}"><div class="card-cover-div" style="background-image:url('{{ asset('img/' . $event->cover) }}')"></div></a>
  <div class="card-content">
    <div class="card-body">
      @if(false)
      <h2 class="card-title"><a href="{{ url('events/' . $event->slug) }}"><?=$event->title?></a></h2>
      @endif
      <h4 class="card-date"><?=date('l, j F Y', strtotime($event->date_start))?></h4>
      <h4 class="card-time"><?=$event->time_start?> - <?=$event->time_end?></h4>
      <p class="card-description" style="display:block;">
      </p>
      <p class="card-details">
        @if(strlen($event->description) > 200)
          <?=substr($event->description, 0, 200)?>... <a href="{{ url('events/' . $event->slug) }}">More</a>
        @else
          <?=$event->description?>
        @endif
      </p>
    </div>
    <hr>
    <div class="card-footer">
      @if($event->getOriginal('price') || $event->price != "Free")
        <a class="card-action" href="<?=$event->tickets_link?>">Wristband&nbsp;<i class="fa fa-ticket" aria-hidden="true"></i></a>
      @endif
      <a class="card-action" target="_blank" href="{{ url('events/' . $event->slug) }}">Directions&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i></a>
    </div>
  </div>
</div>
