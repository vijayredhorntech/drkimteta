<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    protected $fillable = [
        'media',
        'type',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
