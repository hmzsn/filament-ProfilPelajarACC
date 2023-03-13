<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionRole extends Model
{
    use HasFactory;

    protected $fillable = ['functions_id','role_id'];
    
    public function functions()
    {
        return $this->belongsTo(FunctionsRole::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
