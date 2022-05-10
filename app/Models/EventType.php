<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //biar bisa mash input

    public function events()
    {
        // 1 katerogi bisa dimiliki oleh banyak post
        return $this->hasMany(Event::class);
    }
}
