<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{protected $fillable = [
    'room',
    'schoolID',
];

    public function school()
    {
        return $this->hasOne(School::class,"id", "schoolID");
    }
    use HasFactory;
}
