<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function careers()
    {
        return $this->hasMany(Career::class);
    }
}
