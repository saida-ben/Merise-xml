<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Si l'utilisateur est authentifié, redirigez-le vers une page spécifique
        if ($request->user()) {
            return route('dashboard'); // Remplacez 'dashboard' par le nom de votre route souhaitée
        }

        // Si l'utilisateur n'est pas authentifié, Laravel continuera avec la redirection vers la page de connexion
        return $request->expectsJson() ? null : route('login');
    }
}
