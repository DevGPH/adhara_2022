<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class SantanderKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::connection('mysql_second')->table('santander_keys')->insert([
            'id_company' =>  Crypt::encryptString('6987'),
            'id_sucursal' =>  Crypt::encryptString('0002'),
            'user' =>  Crypt::encryptString('6987SIUS0'),
            'pass_user' =>  Crypt::encryptString('XXEYHUTUJ1'),
            'semilla_xml' =>  Crypt::encryptString('5503EB12E415210A8B1D8E7C74EB576E'),
            'llave_comercial' =>  Crypt::encryptString('9265654811'),
            'ambiente' => 'test', // test - prod
            'hotel_id' => 1, // test - prod
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::connection('mysql_second')->table('santander_keys')->insert([
            'id_company' =>  Crypt::encryptString('ZC6A'),
            'id_sucursal' =>  Crypt::encryptString('0006'),
            'user' =>  Crypt::encryptString('ZC6ASIUS0'),
            'pass_user' =>  Crypt::encryptString('APSPVPSRG9'),
            'semilla_xml' =>  Crypt::encryptString('060FEAA5A3BCC3E31ECF231D6A225A03'),
            'llave_comercial' =>  Crypt::encryptString('9265655153'),
            'ambiente' => 'prod', // test - prod
            'hotel_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
