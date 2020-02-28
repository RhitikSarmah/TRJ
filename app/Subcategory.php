<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $guarded=[];
    public function subcategories(){
    	return $this->belongsTo(Category::class);
    }
}
