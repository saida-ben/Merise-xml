<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'Laravel') }}</title>
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script>
        // Fonction pour changer la langue
        function changeLanguage() {
            var langSelect = document.getElementById('langSelect');
            var selectedLang = langSelect.value;
            window.location.href = '/change-languages?lang=' + selectedLang;
        }
        console.log("Langue actuelle dans la session :", "{{ session('lang') }}");
    </script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel 10 User Roles and Permissions 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
  
                    </ul>
  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
  
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @can('user-list')
                            <?php
                            $translations = app('App\Http\Controllers\LanguageController')->loadTranslations(App::getLocale());
?>
                            <li><a class="nav-link" href="{{ route('users.index') }}">{{ $translations['Manage_Users'] }}</a></li>
                            @endcan    @can('role-list')
    <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
@endcan   

<select name="lang" id="langSelect" onchange="changeLanguage()">
    <option value="en" {{ session('lang') == 'en' ? 'selected' : '' }}>English</option>
    <option value="fr" {{ session('lang') == 'fr' ? 'selected' : '' }}>Français</option>
    <!-- Ajoutez d'autres options pour d'autres langues si nécessaire -->
</select>
</form>

</form>


@can('product-list')
<li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>@endcan
                           
             @can('condidat-list')
                               <li><a class="nav-link" href="{{ route('condidats.index') }}">Liste Condidats</a></li>
                               @endcan

             @can('condidat-create')
                            <li><a class="nav-link" href="{{ route('condidats.create') }}">create Condidat</a></li>
                            @endcan

 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
  
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
  
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
          
    </div>
</body>
</html>