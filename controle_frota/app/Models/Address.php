<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [ 'workshop_id','city_id','address','number','district','cep','complement'];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
   
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
