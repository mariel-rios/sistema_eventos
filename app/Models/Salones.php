<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salones extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function solicitudes(){

        return $this->hasMany(Solicitudes::class); 
    }
}
