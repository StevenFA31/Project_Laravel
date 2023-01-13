@extends('layout')

@section('content')
<h1>Ajouter un artiste</h1>
<form action="dataInsert3" method="POST">
@csrf
<input type="text" name="artiste" placeholder="Entrez le nom de l'artiste"> <br> <br>

<button type="submit">Ajouter</button>
</form>
@endsection