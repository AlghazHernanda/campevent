<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoveWishlist extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //biar bisa mash input


    public function loved()
    {
        //relasi one to one
        //namanya jadi author, dan mengambil user id
        return $this->belongsToMany(Event::class, 'event_id');
    }
}
