<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'brand',
        'category',
        'description',
        'picture',
        'status',
    ];

    public function getBrand()
    {
        return $this->belongsTo(Brand::class, 'brand', 'id');
    }

    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
