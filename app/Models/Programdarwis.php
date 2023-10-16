<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programdarwis extends Model
{
    use HasFactory;


    public function bidang()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(User::class);
    }
}
