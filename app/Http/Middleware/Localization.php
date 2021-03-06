<?php

namespace WebPa\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class Localization
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
        $language = Session::get('locale', Config::get('app.locale'));
        app()->setLocale($language);

        return $next($request);
    }
}
