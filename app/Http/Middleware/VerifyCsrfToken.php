<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'https://adharacancun.com/santander/response',
        'https://adharacancun.com/santander/reserve',
        'https://www.adharacancun.com/santander/response',
        'https://www.adharacancun.com/santander/reserve',
        'http://adharacancun.com/santander/response',
        'http://adharacancun.com/santander/reserve',
        'http://www.adharacancun.com/santander/response',
        'http://www.adharacancun.com/santander/reserve',
        'https://adharacancun.com/test-santander',
        'https://adhara-cancun-2022:8890/test-santander'

    ];
}
