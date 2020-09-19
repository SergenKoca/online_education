<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Auth\UserRole;

class Admin
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
        $user = Auth::user();
        $user_role = UserRole::where('user_id',$user->id)->where('role_id',3)
        ->where('is_active',true)->where('deleted_at',null)->first();
        if($user_role != null){
          return $next($request);
        }

        return redirect()->back();

    }
}
