<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    // biar gapake fillable, ini artinya cuma id doang yg gaboleh di masukin mass assigment
    protected $guarded = ['id'];

    //menghubungkn table post dengan category
    public function eventTypeTo()
    {
        //relasi one to one
        return $this->belongsTo(EventType::class);
    }

    public function author()
    {
        //relasi one to one
        //namanya jadi author, dan mengambil user id
        return $this->belongsTo(User::class, 'user_id');
    }
}
