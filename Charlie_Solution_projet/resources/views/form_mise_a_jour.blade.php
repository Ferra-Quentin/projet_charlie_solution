@extends('layouts.base')

@section('contenu')

@if($errors->any())
    @foreach ($errors->all() as $item)
        <h3 style="color: red;">Le/les champs ne peut pas être vide ou cette fact existe déjà</h3>
    @endforeach
@endif


<form method="POST" action="{{ route('mise_a_jour_fact') }}">
    @csrf
    <div class="global_creation">
        <h2>Modifier une fact</h2>
        <div class="contenu_creation">
            <p>Id:</p><input style="font-size: 1.2em; margin-bottom:1em;" type=number name="id" value={{ $fact->id }} readonly>
            <textarea name="fact">{{ $fact->fact }}</textarea>
        </div>
        <div class="contenu_creation">
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </div>
    </div>

</form>

@endsection
