<?php

namespace App\Models;

use App\Models\Bidang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programdarwis extends Model
{
    use HasFactory;

    protected $guard = ['id'];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }

}
