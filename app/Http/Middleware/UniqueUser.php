<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UniqueUser
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->id == 1) {
            return $next($request);
        }

        return redirect('/');
    }
}