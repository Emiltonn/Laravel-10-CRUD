<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['street', 'street_number', 'zip_code', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
