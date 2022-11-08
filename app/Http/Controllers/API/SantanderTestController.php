<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SantanderKeys;

class SantanderTestController extends Controller
{
    public function keys()
    {
        $keys = SantanderKeys::where('hotel_id',2)->where('ambiente','prod')->first();
    }
}
