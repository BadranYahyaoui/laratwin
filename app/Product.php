<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','description','price','stock',
    ];

    public function category(){
        return $this->belongsTo('App\Category');

    }

    //ManyToMany Relationship ,User have many Product & Product could be owned by  many users
    public function users(){
        return $this->belongsToMany('App\User','product_user','user_id','product_id');// product_user is the join table
    }


}
