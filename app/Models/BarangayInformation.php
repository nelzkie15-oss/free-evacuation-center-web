<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangayInformation extends Model
{

    protected $fillable = [
        'barangay_name',
      ];


      public function evacuee_information(){
        return $this->hasMany(EvacueeInformation::class);
       }

    use HasFactory;
}
