<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;

    protected $casts=[
        'publish_at' => 'datetime',
        'publish_until' => 'datetime'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
