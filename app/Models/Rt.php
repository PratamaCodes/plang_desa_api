<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    protected $fillable = ['rw_id', 'nomor', 'nama_lengkap', 'no_hp', 'latitude', 'longitude'];

    public function rw(){
        return $this->belongsTo(Rw::class, 'rw_id');
    }
}
