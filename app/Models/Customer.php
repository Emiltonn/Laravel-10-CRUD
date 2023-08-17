<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['cpf', 'name', 'birth_date', 'gender', 'address_id'];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
