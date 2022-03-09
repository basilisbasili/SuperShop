<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user=Auth::user();
        // dd($user->isAdmin());

        if(!$user->isAdmin()){
            session()->flash('warning',"ВЫ НЕ АДМИН");
            return redirect()->route('index');
        };
        return $next($request);
    }
}
