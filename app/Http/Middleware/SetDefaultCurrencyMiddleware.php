<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetDefaultCurrencyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $currencyKey = $request->get('currency');

        if (!empty($currencyKey) && in_array($currencyKey, ['USD', 'EUR', 'GBP','EGP'])) {
            Session::put('default_currency', $currencyKey);
        } else{
            Session::put('default_currency', 'USD');

        }

        return $next($request);
    }
}
