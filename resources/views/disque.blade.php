@extends('layout')

@section('content')
<h1>Ajouter un disque</h1>
<form action="dataInsert" method="POST">
@csrf

<input type="text" name="annee" placeholder="Entrez l'année"> <br> <br>

<button type="submit">Ajouter</button>
</form>
@endsection