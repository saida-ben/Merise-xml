<?php
namespace App\Http\Controllers;

use App\Services\XmlTranslator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserPreferences;


class MenuController extends Controller
{
    public function showMenu(XmlTranslator $xmlTranslator, Request $request)
    {
        // Récupérez la langue depuis la session
        $lang = $request->session()->get('lang', 'fr'); // La langue par défaut est le français
    
        // Chargez les traductions à partir du fichier XML ou de toute autre source
        $translations = $xmlTranslator->loadTranslations($lang);
    
        // Passez les traductions à la vue
        return view('Acceuil', compact('lang', 'translations'));
    }
    public function changeLanguage(Request $request)
    {
        // Récupérez la langue depuis la requête
        $lang = $request->input('lang', 'fr'); // La langue par défaut est le français
    
        // Stockez la langue dans la session pour une utilisation future
        $request->session()->put('lang', $lang);
    
        // Redirigez vers la page précédente
        return redirect()->back()->withInput(['lang' => $lang]);
    }
    public function loadTranslations($locale)
    {
        // Chargez les traductions à partir du fichier XML ou de toute autre source
        // Vous pouvez utiliser votre logique pour charger les traductions ici
        // Retournez un tableau associatif de traductions
        return [
            'title' => 'ESTS',
            'our_programs' => 'Nos Filières',
            'login' => 'Connexion',
            'contact_us' => 'Contactez Nous',
        ];
    }
}
