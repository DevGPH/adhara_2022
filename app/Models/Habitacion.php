<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table = 'habitaciones';

    protected $appends = ['preview'];

    public function categoria()
    {
        return $this->belongsTo(CategoriaHab::class,'categoria_habitacion_id');
    }

    public function plan()
    {
        return $this->belongsTo(PlanHab::class,'plan_habitacion_id');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class,'hotel_id');
    }

    /**
     * Determine the preview img for the room.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function preview(): Attribute
    {
        $preview = '';
        if ($this->categoria->tag_es == 'estandar') {
            $preview = '/images/rooms/estandar_1.png';
        } else if ($this->categoria->tag_es == 'one-bedroom-suite') {
            $preview = '/images/rooms/room_suite.png';
        } else {
            $preview = '/images/rooms/ejecutiva_2.png';
        }
        return new Attribute(
            get: fn () => $preview,
        );
    }
}
