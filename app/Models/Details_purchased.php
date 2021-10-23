<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase_made;

class Details_purchased extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'details_purchased';

    protected $fillable = ['price', 'product_id', 'quantity'];

    public function purchased()
    {
        return $this->belongsTo(Purchase_made::class);
    }
}
