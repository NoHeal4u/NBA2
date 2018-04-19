<?php

namespace App\Http\Middleware;

use Closure;

class CheckHateSpeech
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       // if( stripos(($request->get('content')),'hate') or stripos(($request->get('content')), 'idiot' ) or stripos(($request->get('content')), 'stupid' ) != false ) {

       //      return response(view('layouts.partials.forbidden-comment'));
       //  } return $next($request);

        if (str_contains(strtolower($request->get('content')), ['idiot', 'hate', 'stupid']) === true )  {
            return response(view('layouts.partials.forbidden-comment'));
        }

        return $next($request);
    }
}

