<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeachHouse extends Model
{
    use HasFactory;

    protected $fillable =
    [
      'house_name',
      'description',
      'status',
      'image',
      'room_price'
    ];

    public function reservations()
    {
      return $this->hasMany(Reservations::class, 'room_number', 'room_id');
    }
}
