<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    /** @use HasFactory<\Database\Factories\PrizeFactory> */
    use HasFactory;

    protected $fillable = [
        'value',
        'checkpoint',
    ];

    public function question()
    {
        return $this->hasOne(Question::class);
    }
}
