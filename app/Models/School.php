<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'schoolName',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class,"schoolID", "id");
    }
    use HasFactory;
}
