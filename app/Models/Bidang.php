<?php

namespace App\Models;

use App\Models\Programdarwis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bidang extends Model
{
    // protected $guarded = ['id'];
    protected $table = 'bidangs';

    protected $fillable = [
        'bidang_program'
    ];

    public function programdarwis() 
    {
        return $this->hasMany(Programdarwis::class);
    }
}
