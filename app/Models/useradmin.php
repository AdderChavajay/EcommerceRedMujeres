<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useradmin extends Model
{
    use HasFactory;

    public function prducts(){
        return $this->hasMany('App\Models\product');
    }
    public function contacts(){
        return $this->hasMany('App\Models\contact');
    }
}
