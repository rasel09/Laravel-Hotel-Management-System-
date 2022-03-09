<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [

        'roomType_id', 'title'
    ];

    public function roomType()
    {
        return $this->hasOne(RoomType::class, 'id', 'roomType_id');
    }
}