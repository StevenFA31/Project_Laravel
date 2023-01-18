@extends('layout')

@section('content')
<h1>Formulaire genre</h1>
<form name="genreForm" method="post" action="/genre/{{ $path }}">
    @csrf
    <div>
        <label for="nom">Genre</label>
        <input name="nom" id="nom" class="" value="{{ $genre->nom ?? '' }}">
    </div>
    <div>
        <input type="hidden" name="id" value="{{ $genre->id ?? '' }}">
        <button type="submit">Valider</button>
    </div>
</form>
<a href="/genre">Retour</a>
@endsection