<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurements extends Model
{
    protected $fillable = [
        'temperature',
        'humidity',
        'light',
        'locationID'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class,"id", "locationID");
    }
    use HasFactory;
}
