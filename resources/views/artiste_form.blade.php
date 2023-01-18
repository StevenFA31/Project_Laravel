@extends('layout')
@section('title', "Formulaire artiste")
@section('content')
<form name="artisteForm" method="post" action="/artiste/{{ $path }}">
    @csrf
    <div>
        <label for="nom">artiste</label>
        <input name="nom" id="nom" class="" value="{{ $artiste->nom ?? '' }}">
    </div>
    <div>
        <input type="hidden" name="id" value="{{ $artiste->id ?? '' }}">
        <a class="addForm gray btn" href="/artiste">Retour</a>
        <button class="addForm gray btn" type="submit">Valider</button>

    </div>
</form>
@endsection