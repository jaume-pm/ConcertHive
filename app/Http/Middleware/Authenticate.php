<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request): ?string
    {
        if ($request->expectsJson() || $this->isApiRequest($request)) {
            return response()->json(['error' => 'Unauthorized: You are not authenticated to access this resource.'], 401);
        }

        return route('login');
    }

    /**
     * Check if the request is intended for API routes.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function isApiRequest(Request $request): bool
    {
        return starts_with($request->path(), 'api');
    }
}
