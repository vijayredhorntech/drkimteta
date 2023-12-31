<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'service_id',
        'city',
    ];
    // belongs to service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
