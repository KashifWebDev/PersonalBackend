<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomizeSanctumUnauthorizedResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($response->status() === 401) {
            return response()->json([
                'message' => 'You are not authorized to access this resource.',
            ], 401);
        }

        return $response;
    }
}
