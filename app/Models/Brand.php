<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brand';
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'image',
    ];
}