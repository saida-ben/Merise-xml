<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <script>
    // Fonction pour changer la langue
    function changeLanguage() {
        var langSelect = document.getElementById('langSelect');
        var selectedLang = langSelect.value;
        window.location.href = '/changement-de-langue?lang=' + selectedLang;
    }
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');

/* Styles pour la bannière */
html, body {
margin: 0;
padding: 0;
width: 100%;
height: 100%;
overflow: hidden;
}

.banner {
background-image: url('http://www.ests.uca.ma/wp-content/uploads/2019/06/site-166-d945421cd40a2fcbc28779947880f85d-1386206361.png');
background-color: black;
background-position: center;
background-size: cover;
background-attachment: fixed;
display: table;
width: 100vw;
height: 100vh;
position: relative;
}

.banner__overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
display: table;
height: 100%;
text-align: center;
background-color: rgba(0, 0, 0, 0.575);
animation: banner-in 2s;
}

.banner__container {
display: table-cell;
vertical-align: middle;
}

.banner__title {
  font-family: 'Dancing Script', cursive;
font-size: 100px;
color: rgb(255, 187, 0);
margin-top: 0;
margin-bottom: 30px;
letter-spacing: 1px;
font-weight: 700;
animation: opacity 3s;
}
h2{
  font-family: 'Dancing Script', cursive;
}


.banner__text {
  font-family: 'Roboto', sans-serif;
font-size: 30px;
color: #fff;
margin: 0;
margin-bottom: 40px;
animation: opacity 3s;
}

/* Styles pour le menu */
.menu {
position: fixed;
margin:30px;
top: 0;
left: 0;
right: 0;
z-index: 100;
color: #fff;
display: grid;
grid-template-rows: 5rem 1fr;
grid-template-areas: 'top' 'content';
pointer-events: none;
opacity: 0.9;
}

.menu--open {
pointer-events: auto;
}

.menu__top {
pointer-events: auto;
z-index: 100;
padding: 0 3rem;
grid-area: top;
display: grid;
align-items: center;
grid-template-columns: auto 1fr auto;
grid-template-areas: 'title nav search';
justify-content: space-between;
background: rgba(0, 0, 0, 0.377); /* Couleur de fond transparente */
border-radius: 40px 20px;
border: 2px solid black;
}

.menu__title {
grid-area: title;
font-family: 'Castoro Titling', cursive;
font-weight: 700;
font-size: 1.5rem;
margin: 0;
color: #fff;
}

.menu__nav-top {
grid-area: nav;
overflow: hidden;
height: 1.75rem;
justify-self: center;
}
.logo-img {
    position: relative;
    float: left;
    margin-right: 40px;
    margin-left: 50px;
  }

.menu__nav-top a {
margin: 0 1rem;
color: #fff;
text-decoration: none;
}

.menu__nav-top a:hover {
text-decoration: underline;
}
/* Styles pour la sélection de langue */
#langSelect {
    appearance: none; /* Masquer le style par défaut du navigateur */
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 130px;
    height: 40px;
    color: #fff;
    text-align: center;
    font-weight: bold;
    border-radius: 7px;
    padding: 10px 25px;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
    box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, 0.5),7px 7px 20px 0px rgba(0, 0, 0, 0.1),4px 4px 5px 0px rgba(0, 0, 0, 0.1);
    outline: none;
    background: rgba(243, 143, 72, 0.909);
}


/* Styles pour les options de la sélection */
#langSelect option {
   text-align: center;
    font-weight: bold;
    background-color: #fff; /* Couleur de fond pour chaque option */
    color: #000; /* Couleur du texte pour chaque option */
}



button {
margin: 20px;
}

.custom-btn {
width: 130px;
height: 40px;
color: #fff;
border-radius: 5px;
padding: 10px 25px;
background: transparent;
cursor: pointer;
transition: all 0.3s ease;
position: relative;
display: inline-block;
box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, 0.5),
  7px 7px 20px 0px rgba(0, 0, 0, 0.1),
  4px 4px 5px 0px rgba(0, 0, 0, 0.1);
outline: none;
}

.btn-3 {
background: rgb(205, 133, 63);
background: linear-gradient(0deg, rgba(205, 133, 63, 1) 0%, rgba(139, 69, 19, 1) 100%);
width: 130px;
height: 40px;
line-height: 42px;
padding: 0;
border: none;
}

.btn-3 span {
position: relative;
display: block;
width: 100%;
height: 100%;
font-family: 'Roboto', sans-serif;
font-weight: bold; /* Ajout de la propriété pour rendre le texte en gras */
}

.btn-3:before,
.btn-3:after {
position: absolute;
content: "";
right: 0;
top: 0;
background: rgba(139, 69, 19, 1);
transition: all 0.3s ease;
}

.btn-3:before {
height: 0%;
width: 2px;
}

.btn-3:after {
width: 0%;
height: 2px;
}

.btn-3:hover {
background: transparent;
box-shadow: none;
}

.btn-3:hover:before {
height: 100%;
}

.btn-3:hover:after {
width: 100%;
}

.btn-3 span:hover {
color: rgb(219, 149, 7);
}

.btn-3 span:before,
.btn-3 span:after {
position: absolute;
content: "";
left: 0;
bottom: 0;
background: rgba(139, 69, 19, 1);
transition: all 0.3s ease;
}

.btn-3 span:before {
width: 2px;
height: 0%;
}

.btn-3 span:after {
width: 0%;
height: 2px;
}

.btn-3 span:hover:before {
height: 100%;
}

.btn-3 span:hover:after {
width: 100%;
}
</style>
<body>

<div class="menu">
    <div class="menu__top">
    <img src="{{ asset('l.png') }}" class="logo-img" alt="Logo" width="50" height="50">
            <nav class="menu__nav-top">
                <a href="#" class="line-link">{{ $translations['our_programs'] }}</a>
                <a href="#" class="line-link">{{ $translations['Conditions'] }}</a>
                <a href="#" class="line-link">{{ $translations['contact_us'] }}</a>
        
              </nav>
              <select name="lang" id="langSelect" onchange="changeLanguage()">
        <option value="en" {{ $lang == 'en' ? 'selected' : '' }}>English</option>
        <option value="fr" {{ $lang == 'fr' ? 'selected' : '' }}>Français</option>
        <option value="ar" {{ $lang == 'ar' ? 'selected' : '' }}>Arabe</option>
        <!-- Ajoutez d'autres options pour d'autres langues si nécessaire -->
    </select>
    </div>
</div>

  <div class="banner">
    <div class="banner__overlay">
      <div class="banner__container">
        <h1 class="banner__title">{{ $translations['Bienvenu'] }}</h1>
        <p class="banner__text">{{ $translations['school'] }}</p>
        <button class="custom-btn btn-3"onclick="window.location.href='/Inscription'"><span>{{ $translations['register'] }}</span></button>
        <button class="custom-btn btn-3" onclick="window.location.href='/LoginF'">
  <span>{{ $translations['login'] }}</span>
</button>      </div>
    </div>
  </div>
</body>
</html>
