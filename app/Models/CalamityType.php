<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalamityType extends Model
{
    protected $fillable = [
        'calamity_name',
      ];

      use HasFactory;

}
