<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // Kita pastikan ke VS Code kalau $user memiliki method getRole()
        if ($user && method_exists($user, 'getRole') && $user->getRole() == 'admin') {
            return $next($request);
        }

        return redirect()->route('home.index');
    }
}
