<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $hidden = ['created_at','updated_at'] ;
    protected $fillable=['id','product_id','name','description','Price','stock','image'];
}
