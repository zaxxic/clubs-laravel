<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primarykey = ['id'];

    public function club()
    {
        return $this->belongsTo(club::class);
    }

}
