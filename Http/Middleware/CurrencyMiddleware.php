<?php

namespace Modules\Icurrency\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Icurrency\Support\Facades\Currency;

class CurrencyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $filter = json_decode($request->filter);

        if (isset($filter->currency)){
            Currency::setLocaleCurency($filter->currency);
        }

        return $next($request);

    }
}
