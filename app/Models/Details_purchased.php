<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase_made;
use App\Models\product as Product;

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

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
