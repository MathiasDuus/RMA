<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thresholds extends Model
{
    protected $fillable = [
        'temperature',
        'humidity',
        'light',
        'locationID'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(Location::class,"locationID", "id");
    }
    use HasFactory;
}
