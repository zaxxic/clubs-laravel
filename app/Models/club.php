<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->hasMany(player::class);
    }

    public function pemain()
    {
        return $this->hasMany(pemain::class);
    }
}
