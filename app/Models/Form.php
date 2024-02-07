<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'service_id',
        'message',
        'links',
        'created_at',
        'updated_at',
        'time',
        'date',
    ];

    protected function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
