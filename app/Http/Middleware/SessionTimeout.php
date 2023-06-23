<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SessionTimeout
{
    public function handle($request, Closure $next)
    {
        $timeout = 30; // Tiempo de inactividad en minutos

        if ($request->session()->has('lastActivity')) {
            $lastActivity = Carbon::parse($request->session()->get('lastActivity'));
            $currentTime = Carbon::now();

            if ($currentTime->diffInMinutes($lastActivity) >= $timeout) {
                Auth::logout();
                $request->session()->flush();
                return redirect('/login')->with('message', 'Tu sesión ha expirado debido a inactividad.');
            }
        }

        $request->session()->put('lastActivity', Carbon::now());

        return $next($request);
    }
}
