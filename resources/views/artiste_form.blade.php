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
        <button type="submit">Valider</button>
    </div>
</form>
<a href="/artiste">Retour</a>
@endsection