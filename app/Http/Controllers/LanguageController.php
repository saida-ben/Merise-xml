<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use SimpleXMLElement;
use App\Services\XmlTranslator;
use App\Models\UserPreferences;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Assurez-vous d'ajouter cette ligne

// App\Http\Controllers\LanguageController.php


class LanguageController extends Controller
{
   
    public function changeLanguage(Request $request)
    {
        // Récupérez la langue depuis la requête
        $lang = $request->input('lang', 'fr'); // La langue par défaut est le français
    
        // Stockez la langue dans la session pour une utilisation future
        $request->session()->put('lang', $lang);
    
        // Déclaration de débogage
        dd("Langue mise à jour :", $lang, "Session :", session('lang'));
    
        // Redirigez vers la page précédente
        return redirect()->back()->withInput(['lang' => $lang]);
    }
    
    public function loadTranslations($locale)
{
    $translator = new XmlTranslator();

    // Ajoutez une déclaration de débogage ici

    return $translator->loadTranslations($locale);
}
}
