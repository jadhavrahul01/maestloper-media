<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'author',
        'media',
        'service_id',
        'link',
    ];

    protected function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
