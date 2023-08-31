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

    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getListCategoryNames()
    {
        $category = json_decode($this->category_id);

        foreach ($category as $key => $value) {
            $category[$key] = Category::find($value)->name;
        }

        return $category;

    }
}
