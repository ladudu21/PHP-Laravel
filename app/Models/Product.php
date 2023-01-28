<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'thumb'
    ];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id')->withDefault(['name' => '']);
    }
}
