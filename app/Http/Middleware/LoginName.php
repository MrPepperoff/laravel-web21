<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class loginName
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
        if(isset($request->name) && !empty($request->name)){
            return $next($request);
        }
        else{
            Log::build([
                'driver' => 'single',
                'path' => storage_path('logs/custom.log'),
              ])-> error('Ошибка Имени');
            return Request('/posts');
        } 
    }
}
