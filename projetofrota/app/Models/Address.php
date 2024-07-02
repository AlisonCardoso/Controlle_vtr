<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
       ' workshop_id',
       ' address',
        'number',
        'district',
        'cep',
        'complement',
        'state',
        'city',
    ];
    



    public function workshop()
    {
        
        return $this->hasOne(Workshop::class);
    }


}
