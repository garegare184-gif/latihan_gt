<?php
<<<<<<< HEAD
namespace App\Http\Middleware;

use Closure;
=======

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
use Illuminate\Support\Facades\Auth;

class WargaMiddleware
{
<<<<<<< HEAD
    public function handle($request, Closure $next)
=======
    public function handle(Request $request, Closure $next)
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
    {
        if (Auth::check() && Auth::user()->level === 'warga') {
            return $next($request);
        }
<<<<<<< HEAD
        return redirect('/login');
    }
}
=======
    }
}
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
