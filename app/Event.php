<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

    use SoftDeletes;

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'events';

    /**
     * Date of soft deletion
     *
     * @var string
     */
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
     * TODO: enable proper photo models
     * Get the photos of this event
     *
     * @return Eloquent\Relationship
     */
    /*
    public function photos() {

        return $this->hasMany('App\Photo');
    }
    */

    /**
     * Get the tags of this event
     *
     * @return Eloquent\Relationship
     */
    public function tags() {

        return $this->belongsToMany('App\Tag', 'event_tags', 'event_id', 'tag_id');
    }

    /**
     * TODO: enable proper photo models
     * Get the cover of this event
     *
     * @return Eloquent\Relationship
     */
    /*
    public function cover() {

        return $this->hasOne('App\Photo', 'event_cover');
    }
    */

    /**
     * Get the category of this event
     *
     * @return Eloquent\Relationship
     */
    public function category() {

        return $this->belongsTo('App\Category', 'category_id');
    }

    /**
     * Get the society of this event (if belongs to one)
     *
     * @return Eloquent\Relationship
     */
    public function society() {

        return $this->belongsTo('App\Society', 'society_id');
    }

    /**
     * Accessor for cover
     *
     * @return string
     */
    public function getCoverAttribute($value) {

        if(!$value) {
            return "";
        }
        if(count(explode("covers/", $value))>1) {
            return $value;
        }
        return "covers/" . $value;        
    }

    /**
     * Accessor for price
     *
     * @return string
     */
    public function getPriceAttribute($value) {

        if(!$value) {
            return "Free";
        }
        if(is_numeric($value)) {
            return "&pound;" . $value;        
        }

        return $value;
    }

    /**
     * Accessor for time start
     *
     * @return string
     */
    public function getTimeStartAttribute($value) {
        
        return date('g:ia', strtotime($value));
    }

    /**
     * Accessor for time end
     *
     * @return string
     */
    public function getTimeEndAttribute($value) {
        
        if(!$value) {
            return "until finished";
        }

        return date('g:ia', strtotime($value));
    }

    /**
     * Accessor for title
     *
     * @return string
     */
    public function getTitleAttribute($value) {

        return ucwords($value);
    }

    /**
     * Accessor for subtitle
     *
     * @return string
     */
    public function getSubtitleAttribute($value) {

        return ucwords($value);
    }

    /**
     * Accessor for description
     *
     * @return string
     */
    public function getDescriptionAttribute($value) {

        return ucfirst($value);
    }
}