<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $fillable = ['id', 'sell_data', 'Client_id', 'Flat_id', 'House_id'];

    public function house()
    {
        return $this->hasOne(House::class);
    }
    public function flat()
    {
        return $this->hasMany(Flat::class);
    }
    public function client()
    {
        return $this->hasMany(Client::class);
    }
}
