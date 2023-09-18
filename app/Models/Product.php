<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'discount',
        'description',
        'ingredients',
        'dosage',
        'origin',
        'quantity',
        'is_active',
    ];

//    protected $casts = [
//        'ingredients' => 'array',
//    ];
    public function media()
    {
        return $this->hasMany(ProductMedia::class);
    }

    public function getImagesAttribute()
    {
        return $this->media->map(function ($media) {
            return asset('storage/'.$media->media);
        });
    }
}
