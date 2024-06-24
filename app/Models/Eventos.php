<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function solicitud(){

        return $this->belongsTo(Solicitudes::class); 
    }

}
