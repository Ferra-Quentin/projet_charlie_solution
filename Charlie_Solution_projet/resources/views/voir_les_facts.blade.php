@extends('layouts.base')


@section('contenu')

        @if($facts->count()>0) <!-- Vérification qu'il y ait bien des données dans le retour de la base de donnée pour afficher le tableau -->

        <h1>Mes données</h1>

        <table class="table">
            <thead>
                <tr>
                    <td class="header-table"><strong>Id</strong></td>
                    <td class="header-table"><strong>La fact</strong></td>
                    <td class="header-table"><strong>Action</strong></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($facts as $fact) <!-- Pour chaque fact dans la base de donnée, on ajoute une ligne avec le fact et 3 boutons (Voir, Modifier, Supprimer) -->
                    <tr id="une_data">
                        <td>{{ $fact->id}}</td>
                        <td>{{ $fact->fact }}</td>
                        <td> <a href="{{ route('voir_la_fact', ['id' => $fact->id]) }}"><i class="fa-solid fa-eye icon"></i></a> <a href="{{ route('modifier_une_fact', ['id' => $fact->id]) }}"><i class="fa-solid fa-pen-to-square icon"></i></a> <a href="{{ route('supprimer_une_fact', ['id' => $fact->id]) }}"><i class="fa-solid fa-trash icon-poubelle"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @else <!-- Si aucune données n'est renvoyé dans $posts(Ce que renvoit la BDD) on affiche le <h1>-->
            <h1>Aucune informations ne sont présentent dans la base de donnée</h1>
        @endif

@endsection
