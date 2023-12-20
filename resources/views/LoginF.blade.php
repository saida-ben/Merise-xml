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
    
    <form method="POST" action="{{ route('login') }}">
                        @csrf

        <div class="container">
            <p>Votre compte, une fois crée, vous permettere d'effectuer des modifications éventuelles en cas d'erreur.<br>Un compte ne peut etre créé que si la procédure de condidature en ligne est suivi jusqu'à sa fin</p>
            <label for="email"><b>email:</b></label>
            <input type="text" name="email" placeholder="Entrer votre email" required>
            
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

            <label for="password"><b>Mot de passe:</b></label>
            <input type="password" name="password" placeholder="Mot de passe" required>
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      
          <div class="clearfix">
      
            <button type="submit" class="btn">Valider</button>
          </div>
        </div>
      </form>
</body>
</html>
