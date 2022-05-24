@extends('layouts.base')

<?php
use App\Http\Controllers\FactController;
?>

@section('contenu')

<h1>Suppression des données stockées dans la base de donnée</h1>

<h2 class="information_secondaire">Si vous souhaitez supprimer une fact précise rendez-vous sur la page "Voir les facts" dans le menu principal de la page. Une fois votre fact trouvée cliquez sur la poubelle dans ACTION pour la supprimer</h2>

<table class="tableau_suppression">
    <thead>
        <tr>
            <td><button id="togg1"class="choix" type="button" class="btn btn-primary">Tout supprimer <i class="fa-solid fa-trash icon-poubelle"></i></button><br/><br/><a style="display: none;" id="sur" href="{{ route('supprimer_les_facts') }}"><button class="choix" type="button" class="btn btn-primary">Êtes-vous sur de vouloir supprimer l'entièreté de la base de donnée? </button></a></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Avec l'option "Tout supprimer", vous allez supprimer toutes les données de la base de donnée<br/><br/>
                <i class="fa-solid fa-triangle-exclamation"></i><strong> Attention </strong><i class="fa-solid fa-triangle-exclamation"></i> Il n'y aura pas de retour possible une fois ce bouton cliquer, <u>soyez donc sur de vouloir tout supprimer.</u></td>
        </tr>
    </tbody>
</table>

<script>
    let sur = document.getElementById("sur");

    togg1.addEventListener("click", () => {
  if(getComputedStyle(sur).display != "none"){
    sur.style.display = "none";
  } else {
    sur.style.display = "block";
  }
})

</script>


@endsection
