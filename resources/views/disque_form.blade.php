@extends('layout')
@section('title', "Formulaire disque")
@section('content')
<form name="disqueForm" method="post" action="/disque/{{ $path }}">
    @csrf
    <div>
        <label for="titre">Titre</label>
        <input name="titre" id="titre" class="" value="{{ $disque->titre ?? '' }}">
    </div>
    <div>
        <label for="annee">Année</label>
        <input name="annee" id="annee" class="" value="{{ $disque->annee ?? '' }}">
    </div>
    <div>
        <label for="artiste">Artiste</label>
        <select name="artiste" id="artiste">
            @foreach ($artistes as $artiste)
            <option value="{{ $artiste->id }}" @if (isset($disque) && $artiste->id == $disque->artiste_id) selected @endif>{{ $artiste->nom }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="genre">Genre</label>
        <select name="genre" id="genre">
            @foreach ($genres as $genre)
            <option value="{{ $genre->id }}" @if (isset($disque) && $genre->id == $disque->genre_id) selected @endif>{{ $genre->nom }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <input type="hidden" name="id" value="{{ $disque->id ?? '' }}">
        <a class="addForm gray btn" href="/disque">Retour</a>
        <button class="addForm gray btn" type="submit">Valider</button>
    </div>
</form>
@endsection