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
<div class="divCatButton">
<a class="addForm gray btn" href="/artiste">Retour</a>
</div>
@endsection