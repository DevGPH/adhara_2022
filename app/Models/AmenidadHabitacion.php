<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenidadHabitacion extends Model
{
    use HasFactory;

    protected $table = "amenidades_x_cuarto";

    public function amenidad()
    {
        return $this->belongsTo(AmenidadHabitacion::class, 'amenidad_id');
    }
}
