<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function directors()
    {
        return $this->hasMany(Director::class);
    }
}
