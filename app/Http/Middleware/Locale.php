<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class Locale
{
//    public function __construct(Request $request) {
//        $this->request = $request;
//    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
         if(in_array($request->segment(1), config('app.locales'))){
                \App::setLocale($request->segment(1));
          }else{
                \App::setLocale(config('app.locale'));
          }
      return $next($request);
    }
}
