@extends('layout')
@section('title', "Page détail disque")
@section('content')


<ul>
    <li>ID : {{ $disque->id }}</li>
    <li>Titre : {{ $disque->titre }}</li>
    <li>Artiste : {{ $disque->artiste->nom }}</li>
    <li>Genre : {{ $disque->genre->nom }}</li>
    <li>Année : {{ $disque->annee }}</li>

</ul>
<div>
    <a href="/disque/update/{{ $disque->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/disque/delete/{{ $disque->id }}"><i class="fa-solid fa-trash"></i></a>
</div>
<div class="divCatButton">
<a class="addForm gray btn" href="/disque">Retour</a>
</div>
@endsection