<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','image','caegory_id','subcategory_id'];
    public function products(){
    	return $this->belongsTo(Subcategory::class);
    }
}
