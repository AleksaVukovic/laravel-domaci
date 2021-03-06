<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
