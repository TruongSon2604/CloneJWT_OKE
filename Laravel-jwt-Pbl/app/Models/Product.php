<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable=[
        // 'category_id',
        // 'brand_id',
        // 'name',
        // 'is_trendy',
        // 'is_available',
        // 'price',
        // 'discount',
        // 'image',
        // 'amount'
        'name',
        'soluong'
    ];
    public $timestamps = false;
    // public function category()
    // {
    //     return $this->belongsTo(Category::class,'category_id');

    // }
    // public function brand()
    // {
    //     return $this->belongsTo(Brands::class,'brand_id');

    // }
}