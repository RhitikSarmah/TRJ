<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['name','image','category_id'];
    public function subcategories(){
    	return $this->belongsTo(Category::class);
    }
}
