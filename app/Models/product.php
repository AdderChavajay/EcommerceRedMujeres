<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Association;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'size', 'price', 'description', 'images', 'selled', 'association_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
