<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * Get the events in this category.
     *
     * @return User
     */
    public function events() {

        return $this->hasMany('App\Event', 'category_id');
    }
}