<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'start_date',
        'end_date',
        'room_number',
        'guest_number',
        'price',
    ];

    protected $primaryKey = 'reservation_id';

    public function room()
    {
        return $this->belongsTo(BeachHouse::class, 'room_number','room_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
