@extends('layouts.base')

@section('contenu')

    <h1>Ma données</h1>

    <table class="table">
        <thead>
            <tr>
                <td class="header-table"><strong>Id</strong></td>
                <td class="header-table"><strong>La données</strong></td>
                <td class="header-table"><strong>Action</strong></td>
            </tr>
        </thead>
        <tbody>
            <tr id="une_data">
                <td>{{ $fact->id }}</td>
                <td>{{ $fact->fact }}</td>
                <td></a> <a href="{{ route('modifier_une_fact', ['id' => $fact->id]) }}"><i class="fa-solid fa-pen-to-square icon"></i></a> <a href="{{ route('supprimer_une_fact', ['id' => $fact->id]) }}"><i class="fa-solid fa-trash icon-poubelle"></i></a></td>
            </tr>
        </tbody>
    </table>

@endsection
