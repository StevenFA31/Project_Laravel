@extends('layout')
@section('title', "Formulaire genre")
@section('content')
<form name="genreForm" method="post" action="/genre/{{ $path }}">
    @csrf
    <div>
        <label for="nom">Genre</label>
        <input name="nom" id="nom" class="" value="{{ $genre->nom ?? '' }}">
    </div>
    <div class="divCatButton">
        <input type="hidden" name="id" value="{{ $genre->id ?? '' }}">
        <button class="addForm gray btn" type="submit">Valider</button>
<a class="addForm gray btn" href="/genre">Retour</a>

    </div>
</form>

@endsection