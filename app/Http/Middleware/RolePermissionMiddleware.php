<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolePermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , string $role , string $permission =null, string $guard='web'): Response
    {
        $user = auth()->guard($guard )->user();
        if( !$user || $user->role !== $role)
        {
            return response()->json(['message' => 'Unauthorized: Wrong role or not logged in'], 403);
            }
            // تحقق من الصلاحية إذا تم تمريرها
        if ($permission && !$user->can($permission)) {
            return response()->json(['message' => 'Forbidden: You do not have permission'], 403);
        }


        return $next($request);
    }
}
