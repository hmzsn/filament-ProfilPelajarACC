<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProgram extends Model
{
    use HasFactory;

    protected $fillable = ['program_id','nama','keterangan'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function score()
    {
        return $this->hasMany(Score::class);
    }
}
