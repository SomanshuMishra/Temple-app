<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Arr;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        
        if (! $request->expectsJson()) {
            
            return route('homepage');
        }
        if (Arr::first($this->guards) === 'admin') {
            return route('admin.login');
        }

        return route('login');
    }
}
