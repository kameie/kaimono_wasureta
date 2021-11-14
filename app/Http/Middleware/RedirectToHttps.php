<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToHttps
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
        if(!$this->is_ssl() && config('app.env') === 'production'){
            return redirect('https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        }
        return $next($request);
    }

 public function is_ssl()
    {
        if ( isset($_SERVER['HTTPS']) === true ) // Apache
        {
            return ( $_SERVER['HTTPS'] === 'on' or $_SERVER['HTTPS'] === '1' );
        }
    }
}