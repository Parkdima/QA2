<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['id', 'name', 'cost', 'data', 'floors'];

    public function flat()
    {
        return $this->hasMany(Flat::class);
    }
    public function sells()
    {
        return $this->belongsTo(Sell::class);
    }
}
