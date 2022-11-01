<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StopSale extends Model
{
    use HasFactory;

    protected $table = 'stop_sales';

    public function hotel()
    {
        return $this->belongsTo(Hotel::class,'hotel_id');
    }
}
