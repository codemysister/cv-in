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
        'https://0837-140-213-177-245.ap.ngrok.io/callback',
        'http://127.0.0.1:8000/callback',
        'callback/'
    ];
}
