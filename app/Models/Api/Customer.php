<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['cpf', 'name', 'birth_date', 'gender'];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
