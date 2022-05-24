@extends('layouts.base')

@section('contenu')

@if($errors->any())
    @foreach ($errors->all() as $item)
        <h3 style="color: red; padding:2em;">La fact ne peut pas être vide ou elle est identique à une autre</h3>
    @endforeach
@endif

<form method="POST" action="{{ route('ajout_fact') }}">
    @csrf
    <div class="global_creation">
        <h2>Créer une nouvelle fact</h2>
        <div class="contenu_creation">
            <textarea name="fact"></textarea>
        </div>
        <div class="contenu_creation">
            <button type="submit" class="btn btn-primary">Créer</button>
        </div>
    </div>

</form>

@endsection
