<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChallenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'challenge_id',
        'progress',
        'completed',
        'completed_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function challenge() {
        return $this->belongsTo(Challenge::class);
    }
}
