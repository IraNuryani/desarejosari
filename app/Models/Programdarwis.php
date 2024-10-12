<?php

namespace App\Models;

use App\Models\Bidang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Programdarwis extends Model
{
    use HasFactory;

    protected $guard = ['id'];
    protected $fillable = [
        'bidang_id'
    ];
    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
    public function getDimulaiAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['dimulai'])->translatedFormat('d F Y');
    }
    public function getSelesaiAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['selesai'])->translatedFormat('d F Y');
    }
}
