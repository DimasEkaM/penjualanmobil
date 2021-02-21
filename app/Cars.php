<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = "cars";
    protected $primaryKey = 'car_id';
    protected $fillable = ['car_name','car_price','car_stock'];
}
