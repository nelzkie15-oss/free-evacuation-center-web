<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvacueeInformation extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'contacts',
        'age',
        'gender',
        'barangay',
        'address',
        'head_of_family',
        'type_of_calamity',
        'evacuation_center',
      ];


      public function barangay_information(){
        return $this->belongsTo(BarangayInformation::class);
       }

       public function evacuation_center(){
        return $this->belongsTo(EvacuationCenter::class);
       }
       
       

      use HasFactory;
}
