<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    use HasFactory;
    protected $fillable =
    [
      'first_name',
      'last_name',
      'email',
      'address',
      'phone_number'
    ];
}
