<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articleCount()
    {	
    	return $this->hasMany('App\model\Article','category_id','id')->count();
    }
}
