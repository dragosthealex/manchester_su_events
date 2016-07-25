<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $guarded  = array('id');
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The events created by this user
     *
     * @return Eloquent\Relationship
     */
    public function events() {

        return $this->hasMany('App\Event', 'creator_id');
    }

    /**
     * The photos created by this user
     *
     * @return Eloquent\Relationship
     */
    public function photos() {

        return $this->hasManyThrough('App\Photo', 'App\Event', 'creator_id', 'event_id');
    }
}
