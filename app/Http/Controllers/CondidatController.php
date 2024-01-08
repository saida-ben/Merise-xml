<?php

namespace App\Http\Controllers;


use Hash;
use App\Models\Condidat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
class CondidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $condidats = Condidat::latest()->paginate(5);
        
        return view('condidats.index',compact('condidats'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $lang = 'en'; // ou récupérez la langue à partir des préférences de l'utilisateur

        return view('Inscription')->with('lang', $lang);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|same:password', // Add this rule
            'etablissement' => 'required',
            'villeEtablissement' => 'required',
            'haut_niveau' => 'required',
        ]);
        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        Condidat::create($input);
         
        return redirect()->route('create')->with('success', 'Candidature enregistrée avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Condidat $condidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condidat $condidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Condidat $condidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Condidat $condidat)
    {
        //
    }
}
