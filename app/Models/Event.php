<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    // biar gapake fillable, ini artinya cuma id doang yg gaboleh di masukin mass assigment
    protected $guarded = ['id'];

    //agar bisa masuk ke database dalam bentuk array
    protected $casts = [
        'eventTheme' => 'json'
    ];

    // if (request('search')) {
    //     $events->where('title', 'like', '%' . request('search') . '%');
    // }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('desc', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['eventTypeTo'] ?? false, function ($query, $eventTypeTo) {
            return $query->whereHas('eventTypeTo', function ($query) use ($eventTypeTo) {
                $query->where('name', $eventTypeTo);
            });
        });
    }


    //menghubungkn table post dengan category
    public function eventTypeTo()
    {
        //relasi one to one
        return $this->belongsTo(EventType::class, 'category_id');
    }

    public function author()
    {
        //relasi one to one
        //namanya jadi author, dan mengambil user id
        return $this->belongsTo(User::class, 'user_id');
    }

    public function love()
    {
        //relasi many to many
        return $this->hasMany(LoveWishlist::class);
    }
}
