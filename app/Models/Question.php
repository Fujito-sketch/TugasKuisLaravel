<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'correctAnswer',
        'prize_id',
    ];

    public function prize()
    {
        return $this->belongsTo(Prize::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
