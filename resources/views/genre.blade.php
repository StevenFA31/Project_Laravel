@extends('layout')
@section('content')
<h1>Ajouter un genre musical</h1>
<form action="dataInsert2" method="POST">
@csrf

<input type="text" name="genre" placeholder="Entrez le genre"> <br> <br>


<button type="submit">Ajouter</button>
</form>
@endsection
