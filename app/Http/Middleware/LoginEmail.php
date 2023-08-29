<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class loginEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(isset($request->mail) && !empty($request->mail)){
            return $next($request); 
        }
        else{
            Log::build([
                'driver' => 'single',
                'path' => storage_path('logs/custom.log'),
              ])-> error('Ошибка Почты');
            return Request('/posts');
        }
    }
}
