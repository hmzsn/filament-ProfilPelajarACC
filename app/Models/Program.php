<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['nama','category_id','keterangan'];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function subprograms()
    {
        return $this->hasMany(SubProgram::class);
    }
}
