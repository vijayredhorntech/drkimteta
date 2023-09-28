<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasSlug;
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
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
        'category_id',
        'slug',
        'benefits'
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

    public function getDiscountPriceAttribute()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
