<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class WargaMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->level === 'warga') {
            return $next($request);
        }
        return redirect('/login');
    }
}
