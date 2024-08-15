<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'user_id',
         'company_id',
         'brand',
         'model',
        'prefix',
        'plate',
         'asset_number',
        'characterized',
        'active',
         'year',
        'odometer',
         'price'
     ];

     public function type_vehicle()
     {

         return $this->hasOne(Vehicle_type::class);
     }


}
