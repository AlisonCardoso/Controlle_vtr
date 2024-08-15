<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'email',
        'cnpj',
        'insrcicao_estadual',
        'phone_number',
        'responsavel'
    ];
    public function user()
    {

        return $this->hasMany(User::class);
    }
    public function address()
    {

        return $this->hasOne(Address::class);
    }
}
