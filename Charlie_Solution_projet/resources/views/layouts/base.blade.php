<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projet Charlie Solution</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <script src="https://kit.fontawesome.com/b801dc1910.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGs03+Hhxv8T/05PaxtkktudugSTONV6gBiFePGFNuhof23091fh" essorigin"anonymous">
    </head>

    <body>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container" id="nav-link">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <a class="navbar-brand" href="{{route('accueil')}}" id="titre">Projet Charlie Solution</a>
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('recuperer_les_donnees_api') }}">Récupérer les données API</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('voir_les_facts') }}">Voir les facts</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('creer_une_fact')}}">Créer</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('supression')}}">Supprimer les données</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div style='height: 25em; background-image: url("images/fond_header.png");background-repeat:no-repeat;background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover; height:25em; line-height: 15em;'>
        <h1 style="color: white; font-size: 5em;">CRUD</h1>
        </div>

        @yield('contenu')
        <script>
            var app = new Vue({
                el:"#vue",
                data: [
                    'fact' => 'test',
                    'fact2' => 'test2'
                ]
            });

        </script>
    </body>
    <footer>
        <h4>Projet Charlie Solution</h4>
        <p>Cette application permet de récupérer les données de l'API fournit puis nous pouvons les gérer grâce à un CRUD</p>
        <p>Ferra Quentin - quentin.ferra.pro@gmail.com</p>
    </footer>
</html>
