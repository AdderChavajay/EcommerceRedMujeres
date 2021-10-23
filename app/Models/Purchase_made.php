<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Details_purchased;
use App\Models\User;

class Purchase_made extends Model
{
    use HasFactory;


    protected $fillable = ['total', 'user_id', 'pay_id', 'n_prod'];

    public function details()
    {
        return $this->hasMany(Details_purchased::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
