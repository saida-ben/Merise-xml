@extends('layouts.app')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h2>Formulaire d'Enregistrement</h2>
    <form action="{{ route('condidats.store') }}" method="post">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="confirm_password">Confirmer le mot de passe:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <label for="etablissement">Établissement:</label>
        <input type="text" id="etablissement" name="etablissement" required><br>

        <label for="villeEtablissement">Ville de l'établissement:</label>
        <input type="text" id="villeEtablissement" name="villeEtablissement" required><br>

        <label for="haut_niveau">Niveau d'études:</label>
        <input type="text" id="haut_niveau" name="haut_niveau" required><br>

        <input type="submit" value="S'inscrire">
    </form>
