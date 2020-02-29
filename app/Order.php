<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $filable = ['order_name','invoice','name','address','phone','email','product','quantity','price'];
}
