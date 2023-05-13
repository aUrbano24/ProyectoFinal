<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
<<<<<<< HEAD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
=======
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
    }
}
