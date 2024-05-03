<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->isAdmin) {
            return redirect('/admin/dashboard'); // halaman admin
        }

        return redirect('/homepage'); // halaman pengguna biasa
    }
} 
