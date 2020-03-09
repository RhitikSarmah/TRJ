<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['name','email','phone','query1','query2','query3','query4','query5','query6','query7','query8','query9','query10','query11','query12','purchase','ref','reason','complaint'];
}
