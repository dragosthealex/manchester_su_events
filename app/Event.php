<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Get the user that created this event
     *
     * @return Eloquent\Relationship
     */
    public function author() {

        return $this->belongsTo('App\User', 'creator_id');
    }

    /**
     * Get the photos of this event
     *
     * @return Eloquent\Relationship
     */
    public function photos() {

        return $this->hasMany('App\Photo')
    }

    /**
     * Get the tags of this event
     *
     * @return Eloquent\Relationship
     */
    public function tags() {

        return $this->belongsToMany('App\Tag', 'events_tag', 'event_id', 'tag_id');
    }

    /**
     * Get the cover of this event
     *
     * @return Eloquent\Relationship
     */
    public function cover() {

        return $this->hasOne('App\Photo', 'event_cover');
    }

    /**
     * Get the category of this event
     *
     * @return Eloquent\Relationship
     */
    public function category() {

        return $this->belongsTo('App\Category', 'category_id');
    }

}