<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bpd extends Model
{
    protected $fillable = ['nomor', 'nama_lengkap', 'no_hp', 'latitude', 'longitude'];

    public function rw(){
        return $this->hasMany(Rw::class, 'bpd_id');
    }
}
