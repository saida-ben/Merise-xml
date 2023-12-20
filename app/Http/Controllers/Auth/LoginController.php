<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        // Vérifier si l'utilisateur a la permission de voir la liste des candidats
        if (Auth::check() && Auth::user()->hasPermissionTo('role-list')) {
            return route('roles.index');
        } else if(Auth::check() && Auth::user()->hasPermissionTo('condidat-list')){
            // Redirection par défaut (peut être ajustée selon vos besoins)
            return route('condidats.index');
        }else{
            return route('/');

        }

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
