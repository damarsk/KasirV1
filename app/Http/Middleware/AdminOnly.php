<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Asumsikan field 'role' di tabel users menyimpan role user
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // lanjutkan akses jika admin
        } else {
            return redirect()->route('dashboard'); // alihkan ke dashboard jika bukan admin
        }
    }
}
