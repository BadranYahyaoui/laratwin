<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','age'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    //ManyToMany Relationship ,User have many Product & Product could be owned by  many users
    public function products(){
        return $this->belongsToMany('App\Product','product_user'); // product_user is the join table
    }



    //OneToMany Relationship ,User have many Tasks & and task is assigned to One User
    public function tasks(){
        return $this->hasMany('App\Task');
    }
}
