@extends('layout')
@section('title', "Page détail artiste")
@section('content')
<ul>
    <li>ID : {{ $artiste->id }}</li>
    <li>Nom : {{ $artiste->nom }}</li>
</ul>
<div>
    <a href="/artiste/update/{{ $artiste->id }}"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/artiste/delete/{{ $artiste->id }}"><i class="fa-solid fa-trash"></i></a>
</div>

</ul>
<a href="/artiste">Retour</a>
@endsection