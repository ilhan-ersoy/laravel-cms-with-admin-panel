<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	/*dene*/
    public function getCategory(){
    	return $this->hasOne('App\model\Category','id','category_id');
    }
        





}
