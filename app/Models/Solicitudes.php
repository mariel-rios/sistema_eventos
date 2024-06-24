<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function salon(){

        return $this->belongsTo(Estados::class); 
    }

    public function evento(){

        return $this->belongsTo(Solicitudes::class); 
    }
}
