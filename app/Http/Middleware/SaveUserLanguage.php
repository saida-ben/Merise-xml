<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SaveUserLanguage
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $request->has('lang')) {
            $user->preferences()->updateOrCreate([], ['language' => $request->input('lang')]);
        }

        return $next($request);
    }
}
