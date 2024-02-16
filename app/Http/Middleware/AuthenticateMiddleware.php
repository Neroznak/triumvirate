<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class AuthenticateMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() && !Route::is('login')) {
            return redirect()->route('login'); // Здесь 'login' - имя маршрута для страницы авторизации
        }

        return $next($request);
    }
}
