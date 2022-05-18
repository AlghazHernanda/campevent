<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoveWishlist extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //biar bisa mash input
}
