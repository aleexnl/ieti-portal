<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function term()
    {
        return $this->belongsTo(Term::class);
    }
}
