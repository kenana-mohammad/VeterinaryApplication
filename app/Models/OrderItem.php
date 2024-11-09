<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
     protected $fillable =[
          'order_id','itemable','itemable_id','itemable_type','quantity'
     ];

    public function order()
    {
        return $this->beLongsTo(Order::class,'order_id');
    }
    //----------------------------------------------------
    public function itemable(){
        return  $this->morphTo();
    }
}
