<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function pendidikans()
    {
        return $this->hasMany('App\Models\Pendidikan');
    }

    public function pengalamans()
    {
        return $this->hasMany('App\Models\Pengalaman');
    }

    public function keahlians()
    {
        return $this->hasMany('App\Models\Keahlian');
    }
}
