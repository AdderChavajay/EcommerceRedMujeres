<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class product_category extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany('App\Models\product');
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
