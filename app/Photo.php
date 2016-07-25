<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Get the event that this photo is posted on.
     *
     * @return User
     */
    public function event() {

        return $this->belongsTo('App\Event', 'event_id');
    }
}