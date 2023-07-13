<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\WEB\Santander\AESCrypto;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\SantanderResponse;
use App\Models\SantanderRequest;
use App\Models\SantanderKeys;
use App\Models\Santander;
use App\Models\CurlError;
use App\Models\Reserva;
use App\Models\Huesped;
use App;

#MAIL
use App\Mail\ConfirmationMail;
use App\Mail\ReservaFailed;
use App\Mail\PagoSuccess;

class SantanderTestController extends Controller
{
    public function keys()
    {
        $keys = SantanderKeys::where('hotel_id',2)->where('ambiente','prod')->first();
    }

    public function testResponse(Request $request) {
        $keys = SantanderKeys::where('hotel_id',2)->where('ambiente','prod')->first();
        $semilla_xml= Crypt::decryptString($keys['semilla_xml']);
        $aes = new AesCrypto();
        $descrypted_xml = $aes->desencriptar($request->strResponse, $semilla_xml);
        $response = new \SimpleXMLElement($descrypted_xml);
        dd($response);
    }
}
