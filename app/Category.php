<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'event_categories';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * Get the events in this category.
     *
     * @return Eloquent\Relationship
     */
    public function events() {

        return $this->hasMany('App\Event', 'category_id');
    }
}