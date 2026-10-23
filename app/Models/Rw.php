<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    protected $fillable = ['bpd_id', 'nomor', 'nama_lengkap', 'no_hp', 'latitude', 'longitude'];

    public function bpd(){
        return $this->belongsTo(Bpd::class, 'bpd_id');
    }

    public function rt(){
        return $this->hasMany(Rt::class, 'rw_id');
    }
}
