<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [

    	'category_id',
    	'title',
    	'body'
    ];


    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function category(){

    	return $this->belongsTo('App\category');
    }
}
