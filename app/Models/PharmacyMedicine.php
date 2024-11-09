<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyMedicine extends Model
{
    use HasFactory;

    protected $fillable=[
       'medicine_id',
       'pharmacy_id',
       'price'
    ];
      public function medicine(){
        return $this->belongsTo(Medicine::class,'medicine_id');
      }

}
