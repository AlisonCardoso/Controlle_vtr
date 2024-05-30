<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['address', 'number','district','cep', 'complement', 'state', 'complement','user_id'];

    use HasFactory;

    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }
}


