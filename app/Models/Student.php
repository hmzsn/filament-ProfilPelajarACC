<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname','nokp','alamat1','alamat2','state_id','city_id','poskod','tarikhlahir','umur','jantina','tinggi','berat',
        'alahan','sekolah','gambar','namabapa','pekerjaanbapa','notelbapa','emailbapa','namaibu','pekerjaanibu','notelibu',
        'emailibu','tarikhpendaftaran','status'];

        public function state()
        {
            return $this->belongsTo(State::class);
        }

        public function city()
        {
            return $this->belongsTo(City::class);
        }

        public function score()
        {
            return $this->hasMany(score::class);
        }

}
