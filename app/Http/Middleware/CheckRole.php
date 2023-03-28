<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $roles = [
            'candidate' => [1],
            'company' => [2],
            ];

        if (!in_array(auth()->user()->role, $roles[$role])){
            abort(403, 'Unauthorized action.' );
        }
        return $next($request);
    }
}
