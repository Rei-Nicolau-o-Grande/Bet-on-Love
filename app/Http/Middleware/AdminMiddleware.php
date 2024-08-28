<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se o usuário autenticado tem a role de "Administrator"
        $user = auth()->user();
        $isAdmin = $user->roles()->where('name', 'Administrator')->exists();

        if (!$isAdmin) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
