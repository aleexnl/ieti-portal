<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    /**
     * Get the user associated with the log.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}