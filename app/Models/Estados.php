<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function estado(){

        return $this->hasMany(Solicitudes::class); 
    }
}
