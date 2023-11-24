<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lgu extends Model
{
    protected $fillable = [
        'city',
        'contact_info',
        'email_address',
        'website',
        'facebook_page',
      ];

      use HasFactory;
}
