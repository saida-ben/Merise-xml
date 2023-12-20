<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condidature en licence professionnelle</title>
</head>
<style>
body {
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
    background-color: #f7f7f7;
    color: #333;
    text-align: center;
}

.container {
    max-width: 50%;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background: white;
    box-shadow: 2px 1px 21px -9px rgba(0, 0, 0, 0.38);
}

.title {
    background: rgb(238,203,146);
    background: radial-gradient(circle, rgba(238,203,146,1) 0%, rgba(208,221,234,1) 100%);
    max-width: ;
    max-height: 640px;
    padding: 1rem 1rem;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

p {
    color:red;
    font-size: 14px;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
}

/* Nouvelle règle CSS pour le conteneur flex */
.input-container {
    display: flex;
    justify-content: space-between;
}

input {
    width: 95%; /* Réduisez la largeur pour accommoder l'espace entre les éléments flexibles */
    padding: 15px;
    margin-bottom: 22px;
    border: 1px solid #ccc;
    background: #f7f7f7;
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
}

select {
    width: 100%;
    padding: 15px;
    margin-bottom: 22px;
    border: 1px solid #ccc;
    background: #f7f7f7;
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
}

select {
    width: calc(100% - 6px); /* Ajustez la largeur pour compenser la bordure */
}

button {
    background: rgb(238,203,146);
    background: radial-gradient(circle, rgba(238,203,146,1) 0%, rgba(208,221,234,1) 100%);
    color: black;
    font-weight:bold;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
    font-size: 16px;
    border-radius: 10px;
}

button:hover {
    opacity: 1;
}

@media screen and (max-width: 300px) {
    button {
        width: 100%;
    }
}
</style>
<body>
    <div class="title">
        <h1>Licences professionnelles<br>Appel à condidature pour l'année 2023-2024</h1>
    </div>
    
    <form method="POST" action="{{ route('store') }}">

                        @csrf
        <div class="container">
            <p>Votre compte, une fois crée, vous permettere d'effectuer des modifications éventuelles en cas d'erreur.<br>Un compte ne peut etre créé que si la procédure de condidature en ligne est suivi jusqu'à sa fin</p>
            <label for="nom"><b>Nom de famille:</b></label>
            <input type="text" name="nom" placeholder="Entrer votre nom" required>
            <label for="prenom"><b>Prénom:</b></label>
            <input type="text" name="prenom" placeholder="Entrer votre prénom" required>
            <label for="password"><b>Mot de passe:</b></label>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <label for="confirm_password"><b>Confirmer votre mot de passe:</b></label>
            <input type="password" name="confirm_password" placeholder="Confirmer votre mot de passe" required>
            <label for="etablissement"><b>Établissement ayant délivré le plus haut niveau validé:</b></label>
            <select name="etablissement" placeholder="etablissement">
                <option value="etablissement">Etablissement</option>
                <option value="fs">Faculté des Sciences (FS)</option>
                <option value="fst">Faculté des Sciences et Techniques (FST)</option>
                <option value="fsjes">Faculté des Sciences Juridiques, Économiques et Sociales (FSJES)</option>
                <option value="fp">Faculté Polydisciplinaire (FP)</option>
                <option value="est">Écoles Supérieures de Technologies (EST)</option>
                <option value="ofppt">Instituts de l’OFPPT</option>
                <option value="cpge_public">Établissement Public de Classes Préparatoires aux Grandes Écoles (CPGE Public)</option>
                <option value="cpge_prive">Établissement Privé de Classes Préparatoires aux Grandes Écoles (CPGE Privé)</option>
                <option value="fmp">Faculté de Médecine et Pharmacie (FMP)</option>
                <option value="autre_prive">Autres Établissements d’Enseignement Privé au Maroc (Autre Privé)</option>
                <option value="autre_public">Autres Établissements d’Enseignement Public au Maroc (Autre Public)</option>
                <option value="autre_public_etranger">Autres Établissements d’Enseignement Supérieur Public à l’Étranger (Autre Public)</option>
                <option value="enset">École Nationale Supérieure de l’Enseignement Technique</option>
                <option value="lycee_public">Lycée public (BTS)</option>
                <option value="lycee_prive">Lycée privé (BTS)</option>
            </select>
            <label for="villeEtablissement"><b>Ville d'établissement:</b></label>
            <select name="villeEtablissement" required placeholder="Ville">
                <option value="choix">Ville</option>
                <option value="agadir">Agadir</option>
                <option value="al_hoceima">Al Hoceima</option>
                <option value="beni_mellal">Beni Mellal</option>
                <option value="ben_guerir">Ben Guerir</option>
                <option value="berrechid">Berrechid</option>
                <option value="casablanca">Casablanca</option>
                <option value="dakhla">Dakhla</option>
                <option value="el_jadida">El Jadida</option>
                <option value="essaouira">Essaouira</option>
                <option value="fes">Fès</option>
                <option value="kenitra">Kénitra</option>
                <option value="laayoune">Laâyoune</option>
                <option value="marrakech">Marrakech</option>
                <option value="meknes">Meknès</option>
                <option value="ouarzazate">Ouarzazate</option>
                <option value="oujda">Oujda</option>
                <option value="rabat">Rabat</option>
                <option value="safi">Safi</option>
                <option value="sale">Salé</option>
                <option value="settat">Settat</option>
                <option value="sidi_bennour">Sidi Bennour</option>
                <option value="tanger">Tanger</option>
                <option value="tetouan">Tétouan</option>
                <option value="taroudant">Taroudant</option>
            </select>
            <label for="haut_niveau"><b>Quelle est le plus haut niveau réussi?</b></label>
            <select name="haut_niveau" required>
                <option value="-----">--------</option>
                <option value="2emeannee">2éme année</option>
            </select>

          
      
          <div class="clearfix">
      
            <button type="submit" class="btn">Valider</button>
          </div>
        </div>
      </form>
</body>
</html>
