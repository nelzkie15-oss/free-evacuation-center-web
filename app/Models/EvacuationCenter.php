<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvacuationCenter extends Model
{
    protected $fillable = [
        'center_name',
        'address',
        'contact_info',
      ];


      public function evacuee_information(){
        return $this->hasMany(EvacueeInformation::class);
       }

      use HasFactory;
}
