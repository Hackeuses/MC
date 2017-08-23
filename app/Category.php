<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    // use the table categories when working with this model Category

    public function posts() {
        return $this->hasMany('App\Post');
        //one to many relationship : one category can have many posts
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
}
